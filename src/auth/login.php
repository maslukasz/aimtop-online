<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = request()->get([
        'name',
        'password'
    ]);

    $_SESSION['name'] = $data['name'];

    $name = $_POST["name"];
    $password = $_POST["password"];

    $r = db()->select('users', '*')->where('name', $name)->fetchAssoc();
    print_r($r);
    if (!empty($r)) {
        echo '????';
        if (password_verify($password, $r['password'])) {
            $_SESSION["name"] = $r["name"];
            header('Location: /');
            exit();
        } else {
            echo 'error1';
            $error = "Invalid username or password";
        }
    } else {
        echo 'error2';
        $error = "Invalid username or password";
    }
}
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<body class='bg-black'>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 bg-dark">
                    <div class="card-header text-center">
                        <h3 class='text-info'>Login <br>(if you want to test website - login: kolega password: kolega)
                        </h3>
                        <?php if (isset($error)) { ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <form method='post' action='/auth/login/'>
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="name" placeholder="Your username">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Wprowadź hasło">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small><a href="https://discord.gg/QJauGpg7zg" target="_blank"><button type="button"
                                    class="btn btn-primary">Discord</button></a></small>
                        <small><a href="/auth/register"><button type="button"
                                    class="btn btn-danger">Register</button></a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>