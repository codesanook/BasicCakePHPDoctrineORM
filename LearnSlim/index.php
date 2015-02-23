<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "root";
});

//Define a HTTP GET route:
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});


$app->get('/home/index', function () {
    echo "home index";
});


$app->get('/user/:id', function ($id) {
    echo sprintf("get userId [%d]",$id);
});


//Run the Slim application:
$app->run();

?>