<?php
$config = array(
    // Application
    'mode'          => 'development',
    'modular'       => true,
    
    // Paths
    'path.root'     => ROOT_PATH,
    'path.public'   => PUBLIC_PATH,
    'path.app'      => APP_PATH,
    
    // Logging
    'log.writer'    => null,
    'log.level'     => \Slim\Log::DEBUG,
    'log.enabled'   => true,
    
    // Routing
    'routes.case_sensitive' => true
);
