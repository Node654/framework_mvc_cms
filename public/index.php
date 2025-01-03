<?php

if (PHP_MAJOR_VERSION < 8) {
    exit('Require PHP version >= 8');
}

require_once '../config/init.php';
require_once ROOT.'/vendor/autoload.php';
require_once CONFIG.'/routes.php';

$app = new \Framework\Application;

$app->run();
