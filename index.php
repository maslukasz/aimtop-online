<?php

session_start();

require __DIR__ . '/vendor/autoload.php';

db()->connect([
    'dbtype' => 'sqlite',
    'dbname' => 'db.sqlite',
]);



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


app()->get('/ra', function () {
    response()->page('./src/benchmarks/ra/al_hard.php');
});

app()->get('/', function () {
    response()->page('./welcome.html');
});

app()->get('/test', function () {
    response()->page('./src/home.php');
});
// Obsługa logowania



app()->get('/dashboard', function () {
    if (!isset($_SESSION['user_id'])) {
        response()->redirect('/auth/login');
    } else {
        response()->page('./src/dashboard.php');
    }
});


app()->run();
