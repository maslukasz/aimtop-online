<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = request()->get([
        'name',
        'password'
    ]);

    $name = $_POST["name"];
    $password = $_POST["password"];

    $r = db()->select('users', '*')->where('name', $name)->fetchAssoc();
    print_r($r);
    if (!empty($r)) {
        $error = 'User with this name already exists';
    } else {
        db()->insert('users')->params(['name' => $name, 'password' => password_hash($password, PASSWORD_DEFAULT)])->execute();
        header('Location: /auth/login');
        exit();
    }
}
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>

<body class='bg-black'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 bg-dark">
                    <div class="card-header text-center">
                        <h3 class='text-info'>Register</h3>
                        <?php if (isset($error)) { ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <form method='post' action='/auth/register/'>
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="name" placeholder="Your username">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Your password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small><a href="https://discord.gg/QJauGpg7zg" target="_blank"><button type="button" class="btn btn-primary">Discord</button></a></small>
                        <small><a href="/auth/login"><button type="button" class="btn btn-danger">Login</button></a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>