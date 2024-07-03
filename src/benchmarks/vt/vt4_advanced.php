<?php

if (!isset($_SESSION['name'])) {
    header('Location: /auth/login');
    exit();
}

$scenarios = ['rasp', 'bounceshot', 'onew5ts', 'multiclick', 'anglestrafe', 'arcstrafe', 'smoothbot', 'preciseorb', 'plaza', 'air', 'patstrafe', 'airstrafe', 'psalmts', 'skyts', 'evats', 'bouncets'];

$scores = [
    'rasp' => [
        1 => [940, 'Grandmaster', 'dynamic'],
        2 => [1040, 'Nova', 'dynamic'],
        3 => [1120, 'Astra', 'dynamic'],
        4 => [1270, 'Celestial', 'dynamic']
    ],
    'bounceshot' => [
        1 => [800, 'Grandmaster', 'dynamic'],
        2 => [900, 'Nova', 'dynamic'],
        3 => [1000, 'Astra', 'dynamic'],
        4 => [1150, 'Celestial', 'dynamic']
    ],
    'onew5ts' => [
        1 => [1280, 'Grandmaster', 'static'],
        2 => [1380, 'Nova', 'static'],
        3 => [1460, 'Astra', 'static'],
        4 => [1580, 'Celestial', 'static']
    ],
    'multiclick' => [
        1 => [1630, 'Grandmaster', 'static'],
        2 => [1770, 'Nova', 'static'],
        3 => [1890, 'Astra', 'static'],
        4 => [2000, 'Celestial', 'static']
    ],
    'anglestrafe' => [
        1 => [880, 'Grandmaster', 'strafe'],
        2 => [1020, 'Nova', 'strafe'],
        3 => [1150, 'Astra', 'strafe'],
        4 => [1230, 'Celestial', 'strafe']
    ],
    'arcstrafe' => [
        1 => [940, 'Grandmaster', 'strafe'],
        2 => [1080, 'Nova', 'strafe'],
        3 => [1150, 'Astra', 'strafe'],
        4 => [1230, 'Celestial', 'strafe']
    ],
    'smoothbot' => [
        1 => [3300, 'Grandmaster', 'precise'],
        2 => [3600, 'Nova', 'precise'],
        3 => [3950, 'Astra', 'precise'],
        4 => [4300, 'Celestial', 'precise']
    ],
    'preciseorb' => [
        1 => [2500, 'Grandmaster', 'precise'],
        2 => [2850, 'Nova', 'precise'],
        3 => [3250, 'Astra', 'precise'],
        4 => [3650, 'Celestial', 'precise']
    ],
    'plaza' => [
        1 => [3275, 'Grandmaster', 'reactive'],
        2 => [3475, 'Nova', 'reactive'],
        3 => [3600, 'Astra', 'reactive'],
        4 => [3800, 'Celestial', 'reactive']
    ],
    'air' => [
        1 => [3000, 'Grandmaster', 'reactive'],
        2 => [3250, 'Nova', 'reactive'],
        3 => [3500, 'Astra', 'reactive'],
        4 => [3750, 'Celestial', 'reactive']
    ],
    'patstrafe' => [
        1 => [3050, 'Grandmaster', 'strafe'],
        2 => [3240, 'Nova', 'strafe'],
        3 => [3400, 'Astra', 'strafe'],
        4 => [3500, 'Celestial', 'strafe']
    ],
    'airstrafe' => [
        1 => [3400, 'Grandmaster', 'strafe'],
        2 => [3600, 'Nova', 'strafe'],
        3 => [3700, 'Astra', 'strafe'],
        4 => [3825, 'Celestial', 'strafe']
    ],
    'psalmts' => [
        1 => [1080, 'Grandmaster', 'speed'],
        2 => [1160, 'Nova', 'speed'],
        3 => [1200, 'Astra', 'speed'],
        4 => [1330, 'Celestial', 'speed']
    ],
    'skyts' => [
        1 => [1300, 'Grandmaster', 'speed'],
        2 => [1430, 'Nova', 'speed'],
        3 => [1500, 'Astra', 'speed'],
        4 => [1600, 'Celestial', 'speed']
    ],
    'evats' => [
        1 => [680, 'Grandmaster', 'evasive'],
        2 => [740, 'Nova', 'evasive'],
        3 => [780, 'Astra', 'evasive'],
        4 => [830, 'Celestial', 'evasive']
    ],
    'bouncets' => [
        1 => [820, 'Grandmaster', 'evasive'],
        2 => [920, 'Nova', 'evasive'],
        3 => [970, 'Astra', 'evasive'],
        4 => [1050, 'Celestial', 'evasive']
    ]
];

function save_rank($scenario, $score, $rank)
{
    $result = db()->select('vt_s4_advanced', $scenario, $scenario . '_rank')->fetchAll();

    if (empty($result)) {
        db()->insert('vt_s4_advanced')->params(['name' => $_SESSION['name'], $scenario => $scenario, $scenario . '_rank' => $scenario . '_rank'])->execute();
    } else {
        db()->update('vt_s4_advanced')->params([$scenario => $score, $scenario . '_rank' => $rank])->where('name', $_SESSION['name'])->execute();
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
};


foreach ($scenarios as $scene) {
    $q = db()->select('vt_s4_advanced', '*')->where('name', $_SESSION['name'])->fetchAssoc();
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
    'VT Pasu Rasp Advanced',
    'VT Bounceshot Advanced',
    'VT 1w5s Rasp Advanced',
    'VT Multiclick 120 Advanced',
    'VT AngleStrafe Advanced',
    'VT ArcStrafe Advanced',
    'VT Smoothbot Advanced',
    'VT PreciseOrb Advanced',
    'VT Plaza Advanced',
    'VT Air Advanced',
    'VT PatStrafe Advanced',
    'VT AirStrafe Advanced',
    'VT psalmTS Advanced',
    'VT skyTS Advanced',
    'VT evaTS Advanced',
    'VT bounceTS Advanced'
];

?>

<?php require_once './src/components/navbar.php'; ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel='stylesheet' href='../public/old_styles/vt.scss'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aimtop VT S4 [ADVANCED]</title>

</head>


<body class='bg-dark'>


    <form method="GET" id="my_form" action="/vt/s4-advanced"></form>
    <div class='container'>
        <span class='text-success'><a href='https://docs.google.com/spreadsheets/d/1qUzF2KHcfs_FgsaDFRfGsLgHhoC1Md5bzMOUbsYzSjg/' target='_blank'><button class='btn btn-dark'><i class=" bi bi-box-arrow-up-left"></i></button></a> Voltaic KvKs Benchmarks S4 - Advanced</span>
        <table class='table table-bordered border-black' id='tab-content'>
            <tr class='table-primary'>
                <th>Scenario</th>
                <th>New High Score</th>
                <th>High Score</th>
                <th>Rank</th>
            </tr>

            <?php foreach ($scenarios as $scene) : ?>
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