<?php
$config['slim'] = array(
    // Application
    'mode'          => 'development',
    'modular'       => true,
    'debug'         => true,
    // Logging
    'log.writer'    => null,
    'log.level'     => \Slim\Log::DEBUG,
    'log.enabled'   => true,
    
    // Routing
    'routes.case_sensitive' => true
);
