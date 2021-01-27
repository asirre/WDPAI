<?php


require 'Routing.php';
$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main', 'DefaultController');
Routing::get('boat', 'DefaultController');
Routing::get('sails', 'DefaultController');
Routing::get('drive', 'DefaultController');
Routing::get('anchors', 'DefaultController');
Routing::post('testResults', 'TestController');
Routing::get('knots', 'KnotsController');
Routing::post('addKnot', 'KnotsController');
Routing::get('test', 'TestController');
Routing::post('register', 'SecurityController');
Routing::post('checkAnswer', 'TestController');
Routing::post('login', 'SecurityController');
Routing::run($path) ;