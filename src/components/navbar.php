<?php
require_once './src/classes/User.php';

if (isset($_SESSION['name'])) {
    $u = new User($_SESSION['name']);
}

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/output.css">
</head>

<nav class="bg-gray-900 mt-1.5 rounded-xl mr-2 ml-2 shadow shadow-black-300 w-100 px-8 md:px-auto">
    <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
        <div class="text-green-500 md:order-1">
            <a href='/'><span>aimtop</span></a>
        </div>

        <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
            <ul class="flex font-semibold justify-between">
                <li class="md:px-4 md:py-2 hover:text-[#7289da]"><a href="https://discord.gg/QJauGpg7zg"
                        target="_blank">Discord</a></li>
                <li class="md:px-4 md:py-2 hover:text-white"><a href="https://x.com/aimtop_online"
                        target="_blank">Twitter</a></li>
                <li class="md:px-4 md:py-2 hover:text-red-600"><a href="/ab-materials">Aimbeast</a></li>
            </ul>
        </div>

        <div class="order-2 md:order-3 flex flex-row gap-2">
            <?php if (!isset($_SESSION['name'])): ?>
                <a href="/auth/login"><button
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-gray-50 rounded-xl flex items-center gap-2">
                        <span>Login</span>
                    </button></a>
                <a href='/auth/register'><button
                        class="px-4 py-2 bg-green-500 hover:bg-green-600 text-gray-50 rounded-xl flex items-center gap-2">
                        <span>Register</span>
                    </button></a>
            <?php else: ?>
                <a href='/u/<?= $u->name; ?>'><button
                        class="px-4 py-2 bg-green-500 hover:bg-green-600 text-gray-50 rounded-xl flex items-center gap-2">
                        <span>Profile</span>
                    </button></a>

                <a href='/settings'><button
                        class="px-4 py-2 bg-blue-500 hover:bg-green-600 text-gray-50 rounded-xl flex items-center gap-2">
                        <span>Settings</span>
                    </button></a>
            <?php endif; ?>
        </div>
    </div>
</nav>