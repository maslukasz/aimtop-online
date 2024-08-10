<?php

$error = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = request()->get([
        'name',
        'password'
    ]);

    $name = $_POST["name"];
    $password = $_POST["password"];

    $r = db()->select('users', '*')->where('name', $name)->fetchAssoc();

    if (!empty($r)) {
        $error = 'User with this name already exists.';
    } else {
        db()->insert('users')->params(['name' => $name, 'password' => password_hash($password, PASSWORD_DEFAULT)])->execute();
        header('Location: /auth/login');
        exit();
    }
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/css/output.css">
    <title>Register - aimtop</title>
</head>

<body class='bg-gray-800 flex flex-col items-center justify-center mt-10'>
    <div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 bg-white text-gray-800">
        <div class="mb-8 text-center">
            <h1 class="my-3 text-4xl font-bold">Register</h1>
        </div>
        <form method="POST" action="/auth/register" class="space-y-12">
            <div class="space-y-4">
                <div>
                    <label for="name" class="block mb-2 text-sm">Username</label>
                    <input type="text" name="name" id="name" placeholder="mluki"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-300 dark:bg-gray-50 dark:text-gray-800">
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <label for="password" class="text-sm">Password</label>
                    </div>
                    <input type="password" name="password" id="password" placeholder="*****"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-300 dark:bg-gray-50 dark:text-gray-800">
                </div>
            </div>
            <div class="space-y-2">
                <div>
                    <button type="submit"
                        class="w-full px-8 py-3 font-semibold rounded-md dark:bg-green-600 dark:text-gray-50">Sign
                        up</button>
                </div>
                <p class="px-6 text-sm text-center dark:text-gray-600">Already have an account?
                    <a rel="noopener noreferrer" href="/auth/login" class="hover:underline dark:text-green-600">Sign
                        in</a>.
                </p>
            </div>
        </form>
        <span class="text-red-600 font-semibold"><?= $error ?></span>
    </div>
</body>>