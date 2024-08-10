<?php

require_once './src/components/navbar.php';

$u = new User(trim($_SERVER['REQUEST_URI'], '/u/'));

$socials = $u->getSocials($u->name);
$about = $u->getAbout($u->name);

$ab_rank = $u->getAimbeastRank($u->name);
$ab_rank_icon = '';
$ab_rank_color = '';

$ab2_rank = $u->getAimbeastRank2($u->name);
$ab2_rank_icon = '';
$ab2_rank_color = '';

switch ($ab_rank) {
    case 'Bronze 1':
        $ab_rank_icon = '../public/img/bronze1.png';
        $ab_rank_color = 'text-yellow-700';
        break;
    case 'Bronze 2':
        $ab_rank_icon = '../public/img/bronze2.png';
        $ab_rank_color = 'text-yellow-700';
        break;
    case 'Bronze 3':
        $ab_rank_icon = '../public/img/bronze3.png';
        $ab_rank_color = 'text-yellow-700';
        break;

    case 'Silver 1':
        $ab_rank_icon = '../public/img/silver1.png';
        $ab_rank_color = 'text-gray-400';
        break;
    case 'Silver 2':
        $ab_rank_icon = '../public/img/silver2.png';
        $ab_rank_color = 'text-gray-400';
        break;
    case 'Silver 3':
        $ab_rank_icon = '../public/img/silver3.png';
        $ab_rank_color = 'text-gray-400';
        break;

    case 'Gold 1':
        $ab_rank_icon = '../public/img/gold1.png';
        $ab_rank_color = 'text-yellow-300';
        break;
    case 'Gold 2':
        $ab_rank_icon = '../public/img/gold2.png';
        $ab_rank_color = 'text-yellow-300';
        break;
    case 'Gold 3':
        $ab_rank_icon = '../public/img/gold3.png';
        $ab_rank_color = 'text-yellow-300';
        break;

    case 'Platinum 1':
        $ab_rank_icon = '../public/img/plat1.png';
        $ab_rank_color = 'text-blue-200';
        break;
    case 'Platinum 2':
        $ab_rank_icon = '../public/img/plat2.png';
        $ab_rank_color = 'text-blue-200';
        break;
    case 'Platinum 3':
        $ab_rank_icon = '../public/img/plat3.png';
        $ab_rank_color = 'text-blue-200';
        break;

    case 'Diamond 1':
        $ab_rank_icon = '../public/img/diam1.png';
        $ab_rank_color = 'text-sky-300';
        break;
    case 'Diamond 2':
        $ab_rank_icon = '../public/img/diam2.png';
        $ab_rank_color = 'text-sky-300';
        break;
    case 'Diamond 3':
        $ab_rank_icon = '../public/img/diam3.png';
        $ab_rank_color = 'text-sky-300';
        break;

    case 'Master 1':
        $ab_rank_icon = '../public/img/master1.png';
        $ab_rank_color = 'text-green-400';
        break;
    case 'Master 2':
        $ab_rank_icon = '../public/img/master2.png';
        $ab_rank_color = 'text-green-400';
        break;
    case 'Master 3':
        $ab_rank_icon = '../public/img/master3.png';
        $ab_rank_color = 'text-green-400';
        break;

    case 'Grandmaster':
        $ab_rank_icon = '../public/img/grandmaster.png';
        $ab_rank_color = 'text-red-500';
        break;
}
;

switch ($ab2_rank) {
    case 'Bronze 1':
        $ab2_rank_icon = '../public/img/bronze1.png';
        $ab2_rank_color = 'text-yellow-700';
        break;
    case 'Bronze 2':
        $ab2_rank_icon = '../public/img/bronze2.png';
        $ab2_rank_color = 'text-yellow-700';
        break;
    case 'Bronze 3':
        $ab2_rank_icon = '../public/img/bronze3.png';
        $ab2_rank_color = 'text-yellow-700';
        break;

    case 'Silver 1':
        $ab2_rank_icon = '../public/img/silver1.png';
        $ab2_rank_color = 'text-gray-400';
        break;
    case 'Silver 2':
        $ab2_rank_icon = '../public/img/silver2.png';
        $ab2_rank_color = 'text-gray-400';
        break;
    case 'Silver 3':
        $ab2_rank_icon = '../public/img/silver3.png';
        $ab2_rank_color = 'text-gray-400';
        break;

    case 'Gold 1':
        $ab2_rank_icon = '../public/img/gold1.png';
        $ab2_rank_color = 'text-yellow-300';
        break;
    case 'Gold 2':
        $ab2_rank_icon = '../public/img/gold2.png';
        $ab2_rank_color = 'text-yellow-300';
        break;
    case 'Gold 3':
        $ab2_rank_icon = '../public/img/gold3.png';
        $ab2_rank_color = 'text-yellow-300';
        break;

    case 'Platinum 1':
        $ab2_rank_icon = '../public/img/plat1.png';
        $ab2_rank_color = 'text-blue-200';
        break;
    case 'Platinum 2':
        $ab2_rank_icon = '../public/img/plat2.png';
        $ab2_rank_color = 'text-blue-200';
        break;
    case 'Platinum 3':
        $ab2_rank_icon = '../public/img/plat3.png';
        $ab2_rank_color = 'text-blue-200';
        break;

    case 'Diamond 1':
        $ab2_rank_icon = '../public/img/diam1.png';
        $ab2_rank_color = 'text-sky-300';
        break;
    case 'Diamond 2':
        $ab2_rank_icon = '../public/img/diam2.png';
        $ab2_rank_color = 'text-sky-300';
        break;
    case 'Diamond 3':
        $ab2_rank_icon = '../public/img/diam3.png';
        $ab2_rank_color = 'text-sky-300';
        break;

    case 'Master 1':
        $ab2_rank_icon = '../public/img/master1.png';
        $ab2_rank_color = 'text-green-400';
        break;
    case 'Master 2':
        $ab2_rank_icon = '../public/img/master2.png';
        $ab2_rank_color = 'text-green-400';
        break;
    case 'Master 3':
        $ab2_rank_icon = '../public/img/master3.png';
        $ab2_rank_color = 'text-green-400';
        break;

    case 'Grandmaster':
        $ab2_rank_icon = '../public/img/grandmaster.png';
        $ab2_rank_color = 'text-red-500';
        break;
}
;


?>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-gray-800 ">
    <div class="flex flex-col items-center justify-center mx-auto md:mt-4">
        <!-- relative flex flex-col items-center px-4 pb-8 text-center sm:px-6 pt-10 -->
        <div class="rounded-lg shadow-xl md:border md:px-4 md:py-8 sm:px-0 sm:py-0 md:border-gray-700">
            <div class="flex justify-center text-slate-300">
                <div class="p-10 mt-5 text-center">
                    <h1 class="text-4xl"><?= $u->name ?></h1>

                    <ul class="flex justify-center gap-3">
                        <?php if (!empty($socials['discord'])): ?>
                            <li title=<?= $socials['discord'] ?> class="mt-5"> <i class="bi bi-discord"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($socials['twitter'])): ?>
                            <li class="mt-5"> <a href="https://x.com/<?= $socials['twitter'] ?>" target="_blank"> <i
                                        class="bi bi-twitter-x"></i></a></li>
                        <?php endif; ?>

                        <?php if (!empty($socials['youtube'])): ?>
                            <li class="mt-5"> <a href="<?= $socials['youtube'] ?>"> <i class="bi bi-youtube"></i></a></li>
                        <?php endif; ?>
                    </ul>

                    <div class="container shadow-md p-4 pt-2 rounded bg-gray-900/40 mt-10">
                        <p class="font-extrabold font-mono mb-2 text-xl">ABOUT ME</p>
                        <?php if (!empty($about)): ?>
                            <p><?= htmlspecialchars($about) ?></p>
                        <?php else: ?>
                            <p class="text-lg">No about me</p>
                        <?php endif; ?>

                    </div>

                    <?php if ($ab_rank != 'N/A' || $ab2_rank != 'N/A'): ?>
                        <div class="container shadow-md p-4 pt-2 rounded bg-gray-900/40 mt-10">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:grid-flow-col">
                                <?php if ($ab_rank != 'N/A'): ?>
                                    <div class="bg-gray-600/50 p-4 rounded">
                                        <p class="font-extrabold font-mono mb-2 text-xl">Aimbeast Season 1
                                            rank
                                        </p>
                                        <p class="flex items-center justify-center gap-1 <?= $ab_rank_color; ?> "><img
                                                src="<?= $ab_rank_icon; ?>" width="28px">
                                            <?= $ab_rank; ?> </p>
                                    <?php endif; ?>
                                </div>

                                <?php if ($ab2_rank != 'N/A'): ?>
                                    <div class="bg-gray-600/50 p-4 rounded">
                                        <p class="font-extrabold font-mono mb-2 text-xl">Aimbeast Season 2 rank
                                        </p>
                                        <p class="flex items-center justify-center gap-1 <?= $ab2_rank_color; ?>"><img
                                                src="<?= $ab2_rank_icon; ?>" width="28px"> <?= $ab2_rank ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</body>