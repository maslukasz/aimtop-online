<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<nav class="navbar border-bottom">
    <div class="container-fluid">
        <a href='/'><span class="navbar-brand mb-0 h1"><button
                    class='btn btn-dark text-success'>aimtop</button></span></a>
        <span class="navbar-text">
            <div class="buttons">
                <a href="https://discord.gg/QJauGpg7zg" target="_blank"> <button class="btn btn-primary">
                        Discord</button></a>
                <a class='text-white' href="https://x.com/aimtop_online" target="_blank"><button
                        class="btn btn-dark border border-black border-2">
                        Twitter</button></a>
                <?php if (!isset($_SESSION["name"])): ?>
                    <a href="/auth/register" class="btn btn-danger">Sign Up</a>
                    <a href="/auth/login" class="btn btn-success">Login</a>
                <?php else: ?>
                    <a href="/"><button class='btn btn-warning'>Profile</button></a>
                <?php endif; ?>
            </div>
        </span>
    </div>

</nav>