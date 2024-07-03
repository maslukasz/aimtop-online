<?php

if (!isset($_SESSION['name'])) {
    header('Location: /auth/login');
    exit();
}

$scenarios = [
    'sixshot',
    'minishot',
    'bounceclick',
    'xyclick',
    'bouncetrack',
    'xytrack',
    'spatialsphere',
    'strafetrack',
    'xyswitch',
    'headswitch'
];

$scores = [
    'sixshot' => [
        1 => [800, 'Bronze', 'static'],
        2 => [1000, 'Silver', 'static'],
        3 => [1200, 'Gold', 'static'],
        4 => [1400, 'Platinum', 'static']
    ],
    'minishot' => [
        1 => [85, 'Bronze', 'static'],
        2 => [95, 'Silver', 'static'],
        3 => [105, 'Gold', 'static'],
        4 => [115, 'Platinum', 'static']
    ],
    'bounceclick' => [
        1 => [400, 'Bronze', 'dynamic'],
        2 => [500, 'Silver', 'dynamic'],
        3 => [600, 'Gold', 'dynamic'],
        4 => [700, 'Platinum', 'dynamic']
    ],
    'xyclick' => [
        1 => [500, 'Bronze', 'dynamic'],
        2 => [600, 'Silver', 'dynamic'],
        3 => [700, 'Gold', 'dynamic'],
        4 => [800, 'Platinum', 'dynamic']
    ],
    'bouncetrack' => [
        1 => [1800, 'Bronze', 'precise'],
        2 => [2200, 'Silver', 'precise'],
        3 => [2600, 'Gold', 'precise'],
        4 => [3000, 'Platinum', 'precise']
    ],
    'xytrack' => [
        1 => [1800, 'Bronze', 'precise'],
        2 => [2200, 'Silver', 'precise'],
        3 => [2600, 'Gold', 'precise'],
        4 => [3000, 'Platinum', 'precise']
    ],
    'spatialsphere' => [
        1 => [2400, 'Bronze', 'precise'],
        2 => [2800, 'Silver', 'precise'],
        3 => [3200, 'Gold', 'precise'],
        4 => [3600, 'Platinum', 'precise']
    ],
    'strafetrack' => [
        1 => [1900, 'Bronze', 'reactive'],
        2 => [2400, 'Silver', 'reactive'],
        3 => [2900, 'Gold', 'reactive'],
        4 => [3400, 'Platinum', 'reactive']
    ],
    'xyswitch' => [
        1 => [45, 'Bronze', 'evasive'],
        2 => [55, 'Silver', 'evasive'],
        3 => [65, 'Gold', 'evasive'],
        4 => [75, 'Platinum', 'evasive']
    ],
    'headswitch' => [
        1 => [35, 'Bronze', 'evasive'],
        2 => [40, 'Silver', 'evasive'],
        3 => [45, 'Gold', 'evasive'],
        4 => [50, 'Platinum', 'evasive']
    ]
];

function save_rank($scenario, $score, $rank)
{
    $result = db()->select('ra_aimlab_easy', $scenario, $scenario . '_rank')->fetchAll();

    if (empty($result)) {
        db()->insert('ra_aimlab_easy')->params(['name' => $_SESSION['name'], $scenario => $scenario, $scenario . '_rank' => $scenario . '_rank'])->execute();
    } else {
        db()->update('ra_aimlab_easy')->params([$scenario => $score, $scenario . '_rank' => $rank])->where('name', $_SESSION['name'])->execute();
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
    $q = db()->select('ra_aimlab_easy', '*')->where('name', $_SESSION['name'])->fetchAssoc();
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
    "rA Sixshot Easy",
    "rA Minishot",
    "rA Bounceclick Easy",
    "rA XYclick Easy",
    "rA Bouncetrack Easy",
    "rA XYtrack",
    "rA Spatialsphere",
    "rA Strafetrack Easy",
    "rA XYswitch Easy",
    "rA Headswitch Easy"
];
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel='stylesheet' href='./public/old_styles/ra.scss'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>rA x Aimlab Easy Benchmarks</title>

</head>


<body class='bg-dark'>


    <form method="GET" id="my_form" action="/ra"></form>
    <div class='container'>
        <span class='text-success'><a href='https://steamcommunity.com/sharedfiles/filedetails/?id=2777610687' target='_blank'><button class='btn btn-dark'><i class="bi bi-box-arrow-up-left"></i></button></a>rA x Aimlab Easy Benchmarks</span>
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