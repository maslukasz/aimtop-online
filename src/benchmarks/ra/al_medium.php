<?php

if (!isset($_SESSION['name'])) {
    header('Location: /auth/login');
    exit();
}

$scenarios = [
    'twoshot',
    'sixwide',
    'sixshot',
    'headclick',
    'xyclick',
    'bounceclick',
    'bouncetrack',
    'smoothtrack',
    'precisesphere',
    'airtrack',
    'reactivesphere',
    'strafetrack',
    'wideflick',
    'speedflick',
    'orblick',
    'headswitch',
    'waveswitch',
    'xyswitch'
];

$scores = [
    'twoshot' => [
        1 => [1000, 'Ace', 'static'],
        2 => [1100, 'Legend', 'static'],
        3 => [1200, 'Sentinel', 'static'],
        4 => [1300, 'Valour', 'static']
    ],
    'sixwide' => [
        1 => [1100, 'Ace', 'static'],
        2 => [1200, 'Legend', 'static'],
        3 => [1300, 'Sentinel', 'static'],
        4 => [1400, 'Valour', 'static']
    ],
    'sixshot' => [
        1 => [900, 'Ace', 'static'],
        2 => [1000, 'Legend', 'static'],
        3 => [1100, 'Sentinel', 'static'],
        4 => [1200, 'Valour', 'static']
    ],
    'headclick' => [
        1 => [650, 'Ace', 'dynamic'],
        2 => [700, 'Legend', 'dynamic'],
        3 => [750, 'Sentinel', 'dynamic'],
        4 => [800, 'Valour', 'dynamic']
    ],
    'xyclick' => [
        1 => [600, 'Ace', 'dynamic'],
        2 => [700, 'Legend', 'dynamic'],
        3 => [800, 'Sentinel', 'dynamic'],
        4 => [900, 'Valour', 'dynamic']
    ],
    'bounceclick' => [
        1 => [450, 'Ace', 'dynamic'],
        2 => [550, 'Legend', 'dynamic'],
        3 => [650, 'Sentinel', 'dynamic'],
        4 => [750, 'Valour', 'dynamic']
    ],
    'bouncetrack' => [
        1 => [2100, 'Ace', 'precise'],
        2 => [2400, 'Legend', 'precise'],
        3 => [2700, 'Sentinel', 'precise'],
        4 => [3000, 'Valour', 'precise']
    ],
    'smoothtrack' => [
        1 => [2400, 'Ace', 'precise'],
        2 => [2700, 'Legend', 'precise'],
        3 => [3000, 'Sentinel', 'precise'],
        4 => [3300, 'Valour', 'precise']
    ],
    'precisesphere' => [
        1 => [2400, 'Ace', 'precise'],
        2 => [2700, 'Legend', 'precise'],
        3 => [3000, 'Sentinel', 'precise'],
        4 => [3300, 'Valour', 'precise']
    ],
    'airtrack' => [
        1 => [2000, 'Ace', 'reactive'],
        2 => [2400, 'Legend', 'reactive'],
        3 => [2800, 'Sentinel', 'reactive'],
        4 => [3200, 'Valour', 'reactive']
    ],
    'reactivesphere' => [
        1 => [2000, 'Ace', 'reactive'],
        2 => [2400, 'Legend', 'reactive'],
        3 => [2800, 'Sentinel', 'reactive'],
        4 => [3200, 'Valour', 'reactive']
    ],
    'strafetrack' => [
        1 => [2000, 'Ace', 'reactive'],
        2 => [2300, 'Legend', 'reactive'],
        3 => [2600, 'Sentinel', 'reactive'],
        4 => [2900, 'Valour', 'reactive']
    ],
    'wideflick' => [
        1 => [84, 'Ace', 'speed'],
        2 => [91, 'Legend', 'speed'],
        3 => [98, 'Sentinel', 'speed'],
        4 => [105, 'Valour', 'speed']
    ],
    'speedflick' => [
        1 => [114, 'Ace', 'speed'],
        2 => [121, 'Legend', 'speed'],
        3 => [128, 'Sentinel', 'speed'],
        4 => [135, 'Valour', 'speed']
    ],
    'orblick' => [
        1 => [108, 'Ace', 'speed'],
        2 => [114, 'Legend', 'speed'],
        3 => [120, 'Sentinel', 'speed'],
        4 => [126, 'Valour', 'speed']
    ],
    'headswitch' => [
        1 => [50, 'Ace', 'evasive'],
        2 => [55, 'Legend', 'evasive'],
        3 => [60, 'Sentinel', 'evasive'],
        4 => [65, 'Valour', 'evasive']
    ],
    'waveswitch' => [
        1 => [45, 'Ace', 'evasive'],
        2 => [49, 'Legend', 'evasive'],
        3 => [53, 'Sentinel', 'evasive'],
        4 => [57, 'Valour', 'evasive']
    ],
    'xyswitch' => [
        1 => [69, 'Ace', 'evasive'],
        2 => [76, 'Legend', 'evasive'],
        3 => [83, 'Sentinel', 'evasive'],
        4 => [90, 'Valour', 'evasive']
    ]
];

function save_rank($scenario, $score, $rank)
{
    $scn_rank = $scenario . '_rank';
    $result = db()->select('ra_aimlab_medium', "{$scenario}, {$scn_rank}")->where('name', $_SESSION['name'])->fetchAssoc();


    if (empty($result)) {
        db()->insert('ra_aimlab_medium')->params(['name' => $_SESSION['name'], $scenario => $scenario, $scenario . '_rank' => $scenario . '_rank'])->execute();
    } else {
        db()->update('ra_aimlab_medium')->params([$scenario => $score, $scenario . '_rank' => $rank])->where('name', $_SESSION['name'])->execute();
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
    $q = db()->select('ra_aimlab_medium', '*')->where('name', $_SESSION['name'])->fetchAssoc();
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
    "rA Twoshot Med",
    "rA Sixwide",
    "rA Sixshot",
    "rA Headclick",
    "rA XYclick Med",
    "rA Bounceclick Med",
    "rA Bouncetrack Med",
    "rA Smoothtrack Med",
    "rA Precisesphere Med",
    "rA Airtrack Med",
    "rA Reactivesphere Med",
    "rA Strafetrack Med",
    "rA Wideflick Med",
    "rA Speedflick Med",
    "rA Orbflick Med",
    "rA Headswitch",
    "rA Waveswitch Med",
    "rA XYswitch Med"
];
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel='stylesheet' href='../public/old_styles/ra.scss'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rA x Aimlab Medium Benchmarks</title>

</head>


<body class='bg-dark'>


    <form method="GET" id="my_form" action="/ra/medium"></form>
    <div class='container'>
        <span class='text-success'><a href='https://steamcommunity.com/sharedfiles/filedetails/?id=2777611978'
                target='_blank'><button class='btn btn-dark'><i class="bi bi-box-arrow-up-left"></i></button></a>rA x
            Aimlab Medium Benchmarks</span>
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