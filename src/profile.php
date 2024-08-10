<?php

require_once './src/components/navbar.php';

$u = new User(trim($_SERVER['REQUEST_URI'], '/u/'));

$socials = $u->getSocials($u->name);
$about = $u->getAbout($u->name);
$ab_rank = $u->getAimbeastRank($u->name);
$ab2_rank = $u->getAimbeastRank2($u->name);

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

                    <div class="container shadow-md p-4 pt-2 rounded bg-gray-900/40 mt-10">
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-6 md:grid-flow-col">
                            <div class="bg-gray-600/50 p-4 rounded">

                                <?php if ($ab_rank != 'N/A'): ?>
                                    <p class="font-extrabold font-mono mb-2 text-xl">Aimbeast Season 1 rank
                                    <p>
                                    <p><?= $ab_rank ?>
                                    <p>
                                    <?php endif; ?>
                            </div>

                            <div class="bg-gray-600/50 p-4 rounded">
                                <?php if ($ab2_rank != 'N/A'): ?>
                                    <p class="font-extrabold font-mono mb-2 text-xl">Aimbeast Season 2 rank
                                    <p>
                                    <p> <?= $ab2_rank ?></p>
                                <?php endif; ?>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>

</body>