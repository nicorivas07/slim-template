<?php
require '../app/bootstrap.php';

require APP_PATH.'config/development.php';
require APP_PATH.'config/production.php';

require APP_PATH.'routes.php';

$app->run();
