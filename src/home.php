<?php require './src/classes/User.php'; ?>

<?php require_once './src/components/navbar.php'; ?>

<head>
    <link rel='stylesheet' href="styles/layouts/index.scss">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>aimtop [alpha]</title>

</head>

<body class='bg-dark'>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class='section text-white text-center mt-5'>
        <div class='container'>

            <h1 class='text-success text-center font-monospace mb-4'>aimtop</h1>
            <p class="subtitle mb-5 fs-4"><strong class="text-primary"><a href='https://x.com/aimtop_online'
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <section class='container section text-light '>

        <h1 class='text-center border-bottom border-warning'>Benchmarks Tool</h1>

        <div class="card-group mt-4">
            <div class="card text-center border-black border-3">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Voltaic Season 4</h5>
                    <p class="card-text">The latest <a href="http://twitter.com/voltaichq" target='_blank'>@Voltaic</a>
                        Season 4
                        Benchmarks</p>

                    <div class="card-footer text-body-secondary">
                        <p class="card-text"><small class="text-body-secondary"> <a href='/vt/s4-novice'
                                    class="btn btn-success">Easy</a>
                                <a href='/vt/s4-intermediate'><button type="button"
                                        class="btn btn-warning">Medium</button></a>
                                <a href='/vt/s4-advanced'><button type="button"
                                        class="btn btn-danger">Hard</button></a></small></p>
                    </div>


                </div>
            </div>
            <div class="card text-center border-black border-3">
                <div class="card-body bg-dark text-white">
                    <h5 class="card-title">Revosect x Aimlab Benchmarks</h5>
                    <p class="card-text"><a href="https://x.com/Revosect" target='_blank'>@Revosect</a> x <a
                            href="https://x.com/aimlab" target='_blank'>@Aimlabs</a> Benchmarks</p>

                    <div class="card-footer text-body-secondary">
                        <p class="card-text"><small class="text-body-secondary"> <a href='/ra/easy'
                                    class="btn btn-success">Easy</a>
                                <a href='/ra/medium'><button type="button" class="btn btn-warning">Medium</button></a>
                                <a href='/ra/hard'><button type="button"
                                        class="btn btn-danger">Hard</button></a></small></p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class='section mt-5 mb-5 text-light'>
        <div class='container text-center font-monospace fs-5'>
            Our website is designed to be a tool that supports you in your daily training. We have created a
            Benchmark
            Tool, run a blog, and collect valuable materials related to FPS game training. Of course, that’s not
            all,
            but we prefer that you discover what we offer by exploring our project yourself.
        </div>
    </section>

    <br>
    <br>

    <section class='container section text-light mt-5'>

        <h1 class='text-center border-bottom border-primary'>Blog</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col ">
                <div class="card h-100 bg-dark text-white border-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title">Aimcademy as a tool for FPS games training</h5>

                    </div>

                    <div class="card-footer text-center">
                        <a class="btn btn-primary" href="/blog/aimcademy-fps">Read</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section">
        <blockquote>
            From the author - the site is open-source. The code is not written by a professional. I run this project
            as
            a hobby, on the side. If there is ever any form of monetization, it will only be to cover hosting costs.
        </blockquote>
    </section>

</body>

<?php require_once './src/components/footer.php'; ?>