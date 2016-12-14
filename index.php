<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('Europe/Moscow');

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application([
    'debug' => true,
]);

require 'config.php';
require 'bootstrap.php';
require 'routing.php';

$app->run();