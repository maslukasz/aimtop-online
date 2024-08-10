<?php

session_start();

require __DIR__ . '/vendor/autoload.php';

db()->connect([
    'dbtype' => 'sqlite',
    'dbname' => 'db.sqlite',
]);

// 404
app()->set404(function () {
    response()->page('./public/static/404.html');
});

// REGISTER - LOGIN
app()->get('/auth/register', function () {
    response()->page('./src/auth/register.php');
});

app()->post('/auth/register', function () {
    response()->page('./src/auth/register.php');
});

app()->get('/auth/login', function () {
    response()->page('./src/auth/login.php');
});

app()->post('/auth/login', function () {
    response()->page('./src/auth/login.php');
});

// BENCHMARKS VT
app()->get('/vt/s4-novice', function () {
    response()->page('./src/benchmarks/vt/vt4_novice.php');
});

app()->get('/vt/s4-intermediate', function () {
    response()->page('./src/benchmarks/vt/vt4_intermediate.php');
});

app()->get('/vt/s4-advanced', function () {
    response()->page('./src/benchmarks/vt/vt4_advanced.php');
});
app()->post('/vt/s4-advanced', function () {
    response()->page('./src/benchmarks/vt/vt4_advanced.php');
});


// BENCHMARKS RA
app()->get('/ra/easy', function () {
    response()->page('./src/benchmarks/ra/al_easy.php');
});
app()->get('/ra/medium', function () {
    response()->page('./src/benchmarks/ra/al_medium.php');
});
app()->get('/ra/hard', function () {
    response()->page('./src/benchmarks/ra/al_hard.php');
});


// BLOG
app()->get('/blog/aimcademy-fps', function () {
    response()->page('./src/blog/aimacademy-fps.php');
});
;

app()->get('/', function () {
    response()->page('./src/home.php');
});

app()->get('/u/{user}', function ($user) {
    $v = db()->select('users', 'name')->where('name', $user)->fetchAssoc();
    if (!empty($v)) {
        response()->page('./src/profile.php');
    } else
        response()->redirect('/404');
});

app()->get('/al-materials', function () {
    response()->page('./src/pages/content/aimlab-materials.php');
});
app()->get('/ab-materials', function () {
    response()->page('./src/pages/content/aimbeast-materials.php');
});

app()->get('/kvk-materials', function () {
    response()->page('./src/pages/content/kovaak-materials.php');
});

app()->get('/test', function () {
    response()->page('./src/test.php');
});

app()->get('/settings', function () {
    response()->page('./src/pages/settings.php');
});
app()->post('/settings', function () {
    response()->page('./src/pages/settings.php');
});



app()->get('/ab-games', function () {
    response()->page('./src/pages/games/aimbeast.php');
});


app()->run();
