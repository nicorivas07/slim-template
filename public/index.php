<?php
require '../app/bootstrap.php';

$app = new \Slim\Slim(array(
  'debug'          => true,
  'log.enabled'    => true,
  'log.level'      => \Slim\Log::WARN,
  'templates.path' => '../app/views',
  'view'           => $twigView
));

$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => true,
        'debug' => false
    ));
});

$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});

/**
 * Index (GET)
 */
$app->get('/', function () use ($app) {
  $app->render('index.html', array('data' => 'testing'));
});
// Run it
$app->run();
