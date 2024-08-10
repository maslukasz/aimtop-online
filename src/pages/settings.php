<?php
if (!isset($_SESSION['name'])) {
    header('Location: /auth/login');
    exit();
}

$error = '';
$ab_rank = 'N/A';
$ab2_rank = 'N/A';

$about_query = db()->select('users', 'about')->where('name', htmlspecialchars($_SESSION['name']))->execute();
$about = $about_query->fetch()[0];
if ($about == 'N/A') {
    $about = '';
}

$ab_rank_query = db()->select('users', 'ab_rank')->where('name', htmlspecialchars($_SESSION['name']))->execute();
$ab_rank = $ab_rank_query->fetch()[0];

$ab2_rank_query = db()->select('users', 'ab2_rank')->where('name', htmlspecialchars($_SESSION['name']))->execute();
$ab2_rank = $ab2_rank_query->fetch()[0];

if (!$ab_rank) {
    $ab_rank = 'N/A';
}

if (!$ab2_rank) {
    $ab2_rank = 'N/A';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['yt'] && $_POST['twitter'] && $_POST['discord'] && $_POST['ab_rank'])) {
        $error = 'Please fill at least one field.';
    } else {
        $error = '';
    }

    if ($_POST['ab_rank']) {
        db()->update('users')->params(['ab_rank' => $_POST['ab_rank']])->where('name', $_SESSION['name'])->execute();
        $ab_rank = $_POST['ab_rank'];
        $error = '';
    }

    if ($_POST['ab2_rank']) {
        db()->update('users')->params(['ab2_rank' => $_POST['ab2_rank']])->where('name', $_SESSION['name'])->execute();
        $ab_rank = $_POST['ab_rank'];
        $error = '';
    }
}

if (!empty($_POST['yt'])) {
    $result = db()->select('users')->where('name', htmlspecialchars($_SESSION['name']));
    $error = '';

    if (!empty($result)) {
        db()->update('users')->params(['youtube' => $_POST['yt']])->where('name', $_SESSION['name'])->execute();
    } else {
        echo 'error';
    }
}

if (!empty($_POST['twitter'])) {
    $result = db()->select('users')->where('name', htmlspecialchars($_SESSION['name']));
    $error = '';

    if (!empty($result)) {
        db()->update('users')->params(['twitter' => $_POST['twitter']])->where('name', $_SESSION['name'])->execute();
    } else {
        echo 'error';
    }
}

if (!empty($_POST['discord'])) {
    $result = db()->select('users')->where('name', htmlspecialchars($_SESSION['name']));
    $error = '';

    if (!empty($result)) {
        db()->update('users')->params(['discord' => $_POST['discord']])->where('name', $_SESSION['name'])->execute();
    } else {
        echo 'error';
    }
}

if (!empty($_POST['about'])) {
    db()->update('users')->params(['about' => htmlspecialchars($_POST['about'])])->where('name', $_SESSION['name'])->execute();
    $about = $_POST['about'];
}

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php require_once './src/components/navbar.php'; ?>

<body class="bg-gray-800 ">
    <div class="flex flex-col items-center justify-center">
        <div
            class="bg-white rounded-lg shadow md:border sm:mb-0 sm:max-w-screen dark:bg-gray-800 dark:border-gray-700 md:mt-2 md:mb-6">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Settings
                </h1>
                <span class="flex items-center">
                    <span class="h-px flex-1 mb-5 bg-green-500/50"></span>
                </span>
                <span class="text-white">Username and password are not possible to change (yet).</span>

                <span class="flex items-center">
                    <span class="h-px flex-1 bg-gray-500/50"></span>
                </span>

                <form class="space-y-4 md:space-y-6" method="POST">
                    <div>
                        <label for="yt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><abbr
                                title="Give only name, not the entire link.">YouTube</abbr></label>
                        <input type="text" name="yt" id="yt"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Account name (@name)">
                    </div>

                    <div>
                        <label for="twitter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">X
                            (Twitter)</label>
                        <input type="text" name="twitter" id="twitter" placeholder="Account name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div>
                        <label for="discord"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discord</label>
                        <input type="text" name="discord" id="discord" placeholder="Account name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <span class="flex items-center">
                        <span class="h-px flex-1 bg-gray-500/50"></span>
                    </span>

                    <label for="ab_rank" class="text-white">Aimbeast S1 rank:</label>
                    <select name="ab_rank" id="ab_rank"
                        class="bg-gray-800 p-1 text-sm rounded border border-gray-500/80 text-gray-300 shadow-md">
                        <option value=<?= $ab_rank ?> selected>✅ <?= $ab_rank ?></option>
                        <option value="Bronze 1">Bronze 1</option>
                        <option value="Bronze 2">Bronze 2</option>
                        <option value="Bronze 3">Bronze 3</option>
                        <option value="Silver 1">Silver 1</option>
                        <option value="Silver 2">Silver 2</option>
                        <option value="Silver 3">Silver 3</option>
                        <option value="Gold 1">Gold 1</option>
                        <option value="Gold 2">Gold 2</option>
                        <option value="Gold 3">Gold 3</option>
                        <option value="Platinum 1">Platinum 1</option>
                        <option value="Platinum 2">Platinum 2</option>
                        <option value="Platinum 3">Platinum 3</option>
                        <option value="Diamond 1">Diamond 1</option>
                        <option value="Diamond 2">Diamond 2</option>
                        <option value="Diamond 3">Diamond 3</option>
                        <option value="Master 1">Master 1</option>
                        <option value="Master 2">Master 2</option>
                        <option value="Master 3">Master 3</option>
                        <option value="Grandmaster">Grandmaster</option>
                    </select><br>

                    <label for="ab2_rank" class="text-white">Aimbeast S2 rank:</label>
                    <select name="ab2_rank" id="ab2_rank"
                        class="bg-gray-800 p-1 text-sm rounded border border-gray-500/80 text-gray-300 shadow-md">
                        <option value=<?= $ab2_rank ?> selected>✅ <?= $ab2_rank ?></option>
                        <option value="Bronze 1">Bronze 1</option>
                        <option value="Bronze 2">Bronze 2</option>
                        <option value="Bronze 3">Bronze 3</option>
                        <option value="Silver 1">Silver 1</option>
                        <option value="Silver 2">Silver 2</option>
                        <option value="Silver 3">Silver 3</option>
                        <option value="Gold 1">Gold 1</option>
                        <option value="Gold 2">Gold 2</option>
                        <option value="Gold 3">Gold 3</option>
                        <option value="Platinum 1">Platinum 1</option>
                        <option value="Platinum 2">Platinum 2</option>
                        <option value="Platinum 3">Platinum 3</option>
                        <option value="Diamond 1">Diamond 1</option>
                        <option value="Diamond 2">Diamond 2</option>
                        <option value="Diamond 3">Diamond 3</option>
                        <option value="Ruby 1">Ruby 1</option>
                        <option value="Ruby 2">Ruby 2</option>
                        <option value="Ruby 3">Ruby 3</option>
                        <option value="Elite 1">Elite 1</option>
                        <option value="Elite 2">Elite 2</option>
                        <option value="Elite 3">Elite 3</option>
                        <option value="Master 1">Master 1</option>
                        <option value="Master 2">Master 2</option>
                        <option value="Master 3">Master 3</option>
                        <option value="Grandmaster">Grandmaster</option>
                        <option value="Supreme">Supreme</option>
                    </select>
                    <p class="text-xs text-white/30">Refresh if didn't change</p>


                    <span class="flex items-center">
                        <span class="h-px flex-1 bg-gray-500/50"></span>
                    </span>

                    <label for="about" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About
                        me</label>
                    <textarea name="about" id="about" maxlength="255" rows="5"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $about ?></textarea>

                    <span class="flex items-center">
                        <span class="h-px flex-1 bg-gray-500/50"></span>
                    </span>

                    <input class="bg-green-500 p-1 text-black text-bold rounded-lg" type="submit" value="Save">
                    <div class="bg-red-700 text-white text-center"><?= $error ?></div>
                </form>
            </div>
        </div>

</body>