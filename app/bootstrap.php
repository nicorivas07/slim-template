<?php

session_cache_limiter(false);
session_start();

define('ROOT_PATH'  , __DIR__.'/../');
define('VENDOR_PATH', __DIR__.'/../vendor/');
define('APP_PATH'   , __DIR__.'/');
define('PUBLIC_PATH', __DIR__.'/../public/');
require VENDOR_PATH.'autoload.php';
require ROOT_PATH.'env.php';
require APP_PATH.'config/config.php';

$app = new \Slim\Slim($config);
