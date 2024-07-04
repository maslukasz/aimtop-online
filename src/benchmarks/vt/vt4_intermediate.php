<?php

$scenarios = ['rasp', 'bounceshot', 'onew5ts', 'multiclick', 'smoothbot', 'preciseorb', 'plaza', 'air', 'psalmts', 'skyts', 'evats', 'bouncets'];

if (!isset($_SESSION['name'])) {
    header('Location: /auth/login');
    exit();
}

$scores = [
    'rasp' => [
        1 => [750, 'Platinum', 'dynamic'],
        2 => [850, 'Diamond', 'dynamic'],
        3 => [950, 'Jade', 'dynamic'],
        4 => [1050, 'Master', 'dynamic']
    ],
    'bounceshot' => [
        1 => [600, 'Platinum', 'dynamic'],
        2 => [700, 'Diamond', 'dynamic'],
        3 => [800, 'Jade', 'dynamic'],
        4 => [900, 'Master', 'dynamic']
    ],
    'onew5ts' => [
        1 => [1000, 'Platinum', 'static'],
        2 => [1100, 'Diamond', 'static'],
        3 => [1200, 'Jade', 'static'],
        4 => [1300, 'Master', 'static']
    ],
    'multiclick' => [
        1 => [1360, 'Platinum', 'static'],
        2 => [1460, 'Diamond', 'static'],
        3 => [1560, 'Jade', 'static'],
        4 => [1660, 'Master', 'static']
    ],
    'anglestrafe' => [
        1 => [740, 'Platinum', 'strafe'],
        2 => [830, 'Diamond', 'strafe'],
        3 => [920, 'Jade', 'strafe'],
        4 => [1000, 'Master', 'strafe']
    ],
    'arcstrafe' => [
        1 => [660, 'Platinum', 'strafe'],
        2 => [750, 'Diamond', 'strafe'],
        3 => [850, 'Jade', 'strafe'],
        4 => [940, 'Master', 'strafe']
    ],
    'smoothbot' => [
        1 => [3050, 'Platinum', 'precise'],
        2 => [3450, 'Diamond', 'precise'],
        3 => [3850, 'Jade', 'precise'],
        4 => [4250, 'Master', 'precise']
    ],
    'preciseorb' => [
        1 => [1650, 'Platinum', 'precise'],
        2 => [2050, 'Diamond', 'precise'],
        3 => [2450, 'Jade', 'precise'],
        4 => [2850, 'Master', 'precise']
    ],
    'plaza' => [
        1 => [2680, 'Platinum', 'reactive'],
        2 => [2980, 'Diadmond', 'reactive'],
        3 => [3280, 'Jade', 'reactive'],
        4 => [3530, 'Master', 'reactive']
    ],
    'air' => [
        1 => [2450, 'Platinum', 'reactive'],
        2 => [2700, 'Diamond', 'reactive'],
        3 => [2950, 'Jade', 'reactive'],
        4 => [3200, 'Master', 'reactive']
    ],
    'patstrafe' => [
        1 => [2260, 'Platinum', 'strafe'],
        2 => [2620, 'Diamond', 'strafe'],
        3 => [2800, 'Jade', 'strafe'],
        4 => [3050, 'Master', 'strafe']
    ],
    'airstrafe' => [
        1 => [2800, 'Platinum', 'strafe'],
        2 => [3000, 'Diamond', 'strafe'],
        3 => [320, 'Jade', 'strafe'],
        4 => [3400, 'Master', 'strafe']
    ],
    'psalmts' => [
        1 => [810, 'Platinum', 'speed'],
        2 => [880, 'Diamond', 'speed'],
        3 => [950, 'Jade', 'speed'],
        4 => [1020, 'Master', 'speed']
    ],
    'skyts' => [
        1 => [1030, 'Platinum', 'speed'],
        2 => [1130, 'Diamond', 'speed'],
        3 => [1220, 'Jade', 'speed'],
        4 => [1300, 'Master', 'speed']
    ],
    'evats' => [
        1 => [550, 'Platinum', 'evasive'],
        2 => [600, 'Diamond', 'evasive'],
        3 => [650, 'Jade', 'evasive'],
        4 => [700, 'Master', 'evasive']
    ],
    'bouncets' => [
        1 => [630, 'Platinum', 'evasive'],
        2 => [670, 'Diamond', 'evasive'],
        3 => [710, 'Jade', 'evasive'],
        4 => [700, 'Master', 'evasive']
    ]
];

function save_rank($scenario, $score, $rank)
{
    $scn_rank = $scenario . '_rank';
    $result = db()->select('vt_s4', "{$scenario}, {$scn_rank}")->where('name', $_SESSION['name'])->fetchAssoc();

    if (empty($result)) {
        db()->insert('vt_s4')->params(['name' => $_SESSION['name'], $scenario => $scenario, $scenario . '_rank' => $scenario . '_rank'])->execute();
    } else {
        db()->update('vt_s4')->params([$scenario => $score, $scenario . '_rank' => $rank])->where('name', $_SESSION['name'])->execute();
    }

    return $result;
}

foreach ($_GET as $response => $value) {
    if ($value) {
        if ($value >= $scores[$response][1][0] && $value < $scores[$response][2][0]) {
            save_rank($response, $value, $scores[$response][1][1]);
            $_SESSION[$response] = $value;
            $_SESSION[$response . '_rank'] = $scores[$response][1][1];
        } elseif ($value >= $scores[$response][2][0] && $value < $scores[$response][3][0]) {
            save_rank($response, $value, $scores[$response][2][1]);
            $_SESSION[$response] = $value;
            $_SESSION[$response . '_rank'] = $scores[$response][2][1];
        } elseif ($value >= $scores[$response][3][0] && $value < $scores[$response][4][0]) {
            save_rank($response, $value, $scores[$response][3][1]);
            $_SESSION[$response] = $value;
            $_SESSION[$response . '_rank'] = $scores[$response][3][1];
        } elseif ($value >= $scores[$response][4][0]) {
            save_rank($response, $value, $scores[$response][4][1]);
            $_SESSION[$response] = $value;
            $_SESSION[$response . '_rank'] = $scores[$response][4][1];
        }
    }
}
;


foreach ($scenarios as $scene) {
    $q = db()->select('vt_s4', '*')->where('name', $_SESSION['name'])->fetchAssoc();
    if ($q) {
        foreach ($q as $key => $value) {
            $_SESSION[$key] = $value;
        }
    } else {
        $_SESSION[$scene] = 0;
        $_SESSION[$scene . '_rank'] = ' ';
    }
}
$replace = [
    'VT Pasu Rasp Intermediate',
    'VT Bounceshot Intermediate',
    'VT 1w5s Rasp Intermediate',
    'VT Multiclick 120 Intermediate',
    'VT AngleStrafe Intermediate',
    'VT ArcStrafe Intermediate',
    'VT Smoothbot Intermediate',
    'VT PreciseOrb Intermediate',
    'VT Plaza Intermediate',
    'VT Air Intermediate',
    'VT PatStrafe Intermediate',
    'VT AirStrafe Intermediate',
    'VT psalmTS Intermediate',
    'VT skyTS Intermediate',
    'VT evaTS Intermediate',
    'VT bounceTS Intermediate'
];

?>
<?php require_once './src/components/navbar.php'; ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel='stylesheet' href='../public/old_styles/vt.scss'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aimtop VT S4 [INTER]</title>
</head>


<body class='bg-dark'>
    <form method="GET" id="my_form" action="/vt/s4-intermediate"></form>
    <div class='container'>
        <span class='text-success'><a
                href='https://docs.google.com/spreadsheets/d/1qUzF2KHcfs_FgsaDFRfGsLgHhoC1Md5bzMOUbsYzSjg/'
                target='_blank'><button class='btn btn-dark'><i class=" bi bi-box-arrow-up-left"></i></button></a>
            Voltaic KvKs Benchmarks S4 - Intermediate</span>
        <table class='table table-bordered border-black' id='tab-content'>
            <tr class='table-primary'>
                <th>Scenario</th>
                <th>New High Score</th>
                <th>High Score</th>
                <th>Rank</th>
            </tr>

            <?php foreach ($scenarios as $scene): ?>
                <tr class='table-dark'>
                    <td class='<?= $scores[$scene][1][2] ?>'><?= str_replace($scenarios, $replace, $scene) ?></td>
                    <td><input type="number" name='<?= $scene ?>' form="my_form" /></td>
                    <td class="text-white"> <?= $_SESSION[$scene] ?> </td>
                    <td class='<?= $_SESSION[$scene . "_rank"] ?>'><?= $_SESSION[$scene . "_rank"] ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
        <button class="btn btn-success" type="submit" form="my_form"><i class="bi bi-arrow-bar-up"></i></button>
    </div>


</body>