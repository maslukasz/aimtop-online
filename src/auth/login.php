<?php

$error = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = request()->get([
        'name',
        'password'
    ]);

    $_SESSION['name'] = $data['name'];

    $name = $_POST["name"];
    $password = $_POST["password"];

    $r = db()->select('users', '*')->where('name', $name)->fetchAssoc();

    if (!empty($r)) {
        if (password_verify($password, $r['password'])) {
            $_SESSION["name"] = $r["name"];
            header('Location: /');
            exit();
        } else {
            echo 'error1';
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/css/output.css">
    <title>Login</title>
</head>

<body class='bg-gray-800 flex flex-col items-center justify-center mt-10'>
    <div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 bg-white text-gray-800">
        <div class="mb-8 text-center">
            <h1 class="my-3 text-4xl font-bold">Sign in</h1>
        </div>
        <form method="POST" action="/auth/login" class="space-y-12">
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
                <p class="px-6 text-sm text-center dark:text-gray-600">Don't have an account yet?
                    <a rel="noopener noreferrer" href="/auth/register" class="hover:underline dark:text-green-600">Sign
                        in</a>.
                </p>
            </div>
        </form>
        <span class="text-red-600 self-center font-semibold"><?= $error ?></span>
    </div>
</body>