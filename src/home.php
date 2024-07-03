<?php


require './src/classes/User.php';

?>

<?php require_once './src/components/navbar.php'; ?>

<head>
    <link rel='stylesheet' href="styles/layouts/index.scss">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>aimtop [alpha]</title>

</head>

<body class='bg-dark'>
    <section class='section text-white text-center mt-5'>
        <div class='container'>

            <h1 class='text-success font-monospace'>aimtop</h1>
            <p>aimtop </p>
            <p class="subtitle"><strong class="text-primary"><a href='https://x.com/aimtop_hub'
                        target='_blank'>aimtop</a></strong> is a <i>non-profit project</i> where
                <mark>passion plays a major role</mark>. We aim to help players
                improve in FPS games. We do not intend to duplicate the efforts of existing aim groups. Instead, we
                focus on <span class='text-success'>gathering materials</span> prepared by experienced players
                and consolidating them in <span class='text-danger'>one place</span>. There are so many groups
                and guides out there that it can be overwhelming, so we want to assist you in navigating this
                abundance of information.
            </p>
        </div>
    </section>



    <section class='container section text-light'>

        <h1 class='text-center border-bottom'>Benchmarks Tool</h1>
        <div class='row align-items-center'>
            <div class='col'>

                <div class="card" style='width: 24rem;'>
                    <div class="card-body">
                        <h5 class="card-title text-center">Voltaic Season 4</h5>
                        <h6 class='card-subtitle mb-2 text-center'> <span class="badge rounded-pill text-bg-warning">KovaaK</span></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="btn-group d-flex align-items-center" role="group" aria-label="Basic example">
                            <a href='/vt/s4-novice'><button type="button" class="btn btn-success">Novice</button></a>
                            <a href='/vt/s4-intermediate'><button type="button" class="btn btn-warning">Intermediate</button></a>
                            <a href='/vt/s4-advanced'><button type="button" class="btn btn-danger">Advanced</button></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class='col'>
                <div class="card" style='width: 24rem;'>
                    <div class="card-body">
                        <h5 class="card-title text-center">Voltaic Season 4</h5>
                        <h6 class='card-subtitle mb-2 text-center'> <span class="badge rounded-pill text-bg-warning">KovaaK</span></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="btn-group text-center" role="group">
                            <a href='/ra/s4-novice'><button type="button" class="btn btn-success">Easy</button></a>
                            <a href='/ra/s4-intermediate'><button type="button" class="btn btn-warning">Medium</button></a>
                            <a href='/ra/s4-advanced'><button type="button" class="btn btn-danger">Hard</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section class='section mt-5 text-light'>
        <div class='container text-center font-monospace fs-5'>
            Our website is designed to be a tool that supports you in your daily training. We have created a Benchmark Tool, run a blog, and collect valuable materials related to FPS game training. Of course, that’s not all, but we prefer that you discover what we offer by exploring our project yourself.
        </div>
    </section>

    <section class="container section has-text-centered">
        <h1 class="title mb-6 has-text-warning-light">Benchmarks tool</h1>
        <div class="grid">
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Voltaic Season 4</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-warning">KovaaK</span><br><br>
                            The latest <a href="http://twitter.com/voltaichq target=' _blank'">@Voltaic</a> Season 4
                            Benchmarks
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="benchmarks/vt/vt4_novice.php" class="card-footer-item"><button
                                class="button is-success">Novice</button></a>
                        <a href="benchmarks/vt/vt4_intermediate.php" class="card-footer-item"><button
                                class="button is-warning">Intermediate</button></a>
                        <a href="benchmarks/vt/vt4_advanced.php" class="card-footer-item"><button
                                class="button is-danger">Advanced</button></a>
                    </footer>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Revosect x Aimlabs</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-link">Aimlab</span><br><br>
                            <a href="https://x.com/Revosect target=' _blank'">@Revosect</a> x <a
                                href="https://x.com/aimlab target=' _blank'">@Aimlabs</a> Benchmarks
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="benchmarks/ra/al_easy.php" class="card-footer-item"><button
                                class="button is-success">Easy</button></a>
                        <a href="benchmarks/ra/al_medium.php" class="card-footer-item"><button
                                class="button is-warning">Medium</button></a>
                        <a href="benchmarks/ra/al_hard.php" class="card-footer-item"><button
                                class="button is-danger">Advanced</button></a>
                    </footer>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Work in progress...</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <progress class="progress is-link" value="15" max="100">
                                15%
                            </progress>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a aria-disabled="true" class="card-footer-item">Soon</a>
                    </footer>
                </div>
            </div>
        </div>
    </section>

    </div>

    <section class="section content is-medium">
        <blockquote>
            From the author - the site is open-source. The code is not written by a professional. I run this project as
            a hobby, on the side. If there is ever any form of monetization, it will only be to cover hosting costs.
        </blockquote>
    </section>


</body>