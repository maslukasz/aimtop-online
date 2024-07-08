<?php

require './src/classes/User.php';

$u = new User($_SESSION['name']);
$user = $u->logged($_SESSION['name']);


$socials = $u->getSocials($u->name);
$about = $u->getAbout($u->name);

print_r($about);


?>

<head>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-[#001e26]">
    <div class="container rounded-3xl mx-auto px-6 bg-[#001318] mt-20 mb-20">
        <div class="flex justify-center text-slate-300 min-h-screen">
            <div class="p10 mt-5 text-center">
                <h1 class="text-3xl"><?= $u->name ?></h1>
                <ul class="flex flex-row gap-3 ">

                    <?php if (!empty($socials['twitter'])): ?>
                        <li class="mt-5"> <a href="https://x.com/<?= $socials['twitter'] ?>"> <i
                                    class="bi bi-twitter-x"></i></a></li>
                    <?php endif; ?>

                    <?php if (!empty($socials['youtube'])): ?>
                        <li class="mt-5"> <a href="<?= $socials['youtube'] ?>"> <i class="bi bi-youtube"></i></li>
                    <?php endif; ?>

                    <?php if (!empty($socials['discord'])): ?>
                        <li title=<?= $socials['discord'] ?> class="mt-5"> <i class="bi bi-discord"></i></a>
                        </li>
                    <?php endif; ?>


                </ul>


                <div class="p-10 my-5">About me</div>
                <?php if (!empty($about)): ?>
                    <p class="text-lg text-w"><?= $about ?></p>
                <?php else: ?>
                    <p class="text-lg">No about me</p>
                <?php endif; ?>


            </div>
        </div>
    </div>

</body>