<?php

$scenarios = ['rasp', 'bounceshot', 'onew6ts', 'multiclick', 'smoothbot', 'preciseorb', 'plaza', 'air', 'psalmts', 'skyts', 'evats', 'bouncets'];

if (!isset($_SESSION['name'])) {
    header('Location: /auth/login');
    exit();
}

$scores = [
    'rasp' => [
        1 => [550, 'Iron', 'dynamic'],
        2 => [650, 'Bronze', 'dynamic'],
        3 => [750, 'Silver', 'dynamic'],
        4 => [850, 'Gold', 'dynamic']
    ],
    'bounceshot' => [
        1 => [500, 'Iron', 'dynamic'],
        2 => [600, 'Bronze', 'dynamic'],
        3 => [700, 'Silver', 'dynamic'],
        4 => [800, 'Gold', 'dynamic']
    ],
    'onew6ts' => [
        1 => [650, 'Iron', 'static'],
        2 => [750, 'Bronze', 'static'],
        3 => [850, 'Silver', 'static'],
        4 => [950, 'Gold', 'static']
    ],
    'multiclick' => [
        1 => [1160, 'Iron', 'static'],
        2 => [1260, 'Bronze', 'static'],
        3 => [1360, 'Silver', 'static'],
        4 => [1460, 'Gold', 'static']
    ],
    'smoothbot' => [
        1 => [2300, 'Iron', 'precise'],
        2 => [2500, 'Bronze', 'precise'],
        3 => [3100, 'Silver', 'precise'],
        4 => [3500, 'Gold', 'precise']
    ],
    'preciseorb' => [
        1 => [1300, 'Iron', 'precise'],
        2 => [1600, 'Bronze', 'precise'],
        3 => [1900, 'Silver', 'precise'],
        4 => [2200, 'Gold', 'precise']
    ],
    'plaza' => [
        1 => [2150, 'Iron', 'reactive'],
        2 => [2450, 'Bronze', 'reactive'],
        3 => [2850, 'Silver', 'reactive'],
        4 => [3050, 'Gold', 'reactive']
    ],
    'air' => [
        1 => [1900, 'Iron', 'reactive'],
        2 => [2200, 'Bronze', 'reactive'],
        3 => [2500, 'Silver', 'reactive'],
        4 => [2800, 'Gold', 'reactive']
    ],
    'psalmts' => [
        1 => [620, 'Iron', 'speed'],
        2 => [690, 'Bronze', 'speed'],
        3 => [760, 'Silver', 'speed'],
        4 => [830, 'Gold', 'speed']
    ],
    'skyts' => [
        1 => [780, 'Iron', 'speed'],
        2 => [860, 'Bronze', 'speed'],
        3 => [950, 'Silver', 'speed'],
        4 => [1040, 'Gold', 'speed']
    ],
    'evats' => [
        1 => [450, 'Iron', 'evasive'],
        2 => [510, 'Bronze', 'evasive'],
        3 => [560, 'Silver', 'evasive'],
        4 => [620, 'Gold', 'evasive']
    ],
    'bouncets' => [
        1 => [490, 'Iron', 'evasive'],
        2 => [550, 'Bronze', 'evasive'],
        3 => [610, 'Silver', 'evasive'],
        4 => [680, 'Gold', 'evasive']
    ]
];

function save_rank($scenario, $score, $rank)
{
    $scn_rank = $scenario . '_rank';
    $result = db()->select('vt_s4_novice', "{$scenario}, {$scn_rank}")->where('name', $_SESSION['name'])->fetchAssoc();

    if (empty($result)) {
        db()->insert('vt_s4_novice')->params(['name' => $_SESSION['name'], $scenario => $scenario, $scenario . '_rank' => $scenario . '_rank'])->execute();
    } else {
        db()->update('vt_s4_novice')->params([$scenario => $score, $scenario . '_rank' => $rank])->where('name', $_SESSION['name'])->execute();
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
    $q = db()->select('vt_s4_novice', '*')->where('name', $_SESSION['name'])->fetchAssoc();
    if ($q) {
        foreach ($q as $key => $value) {
            $_SESSION[$key] = $value;
        }
    } else {
        $_SESSION[$scene] = 0;
        $_SESSION[$scene . '_rank'] = ' ';
    }
}

$replace = ['VT Pasu Rasp Novice', 'VT Bounceshot Novice', 'VT 1w6ts Rasp Novice', 'VT Multiclick 120 Novice', 'VT Smoothbot Novice', 'VT PreciseOrb Novice', 'VT Plaza Novice', 'VT Air Novice', 'VT psalmTS Novice', 'VT skyTS Novice', 'VT evaTS Novice', 'VT bounceTS Novice'];

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
    <title>aimtop VT S4 [NOVICE]</title>

</head>


<body class='bg-dark'>
    <form method="GET" id="my_form" action="/vt/s4-novice"></form>
    <div class='container'>
        <span class='text-success'><a
                href='https://docs.google.com/spreadsheets/d/1qUzF2KHcfs_FgsaDFRfGsLgHhoC1Md5bzMOUbsYzSjg/'
                target='_blank'><button class='btn btn-dark'><i class=" bi bi-box-arrow-up-left"></i></button></a>
            Voltaic KvKs Benchmarks S4 - Novice</span>
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