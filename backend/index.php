<?php

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App( );

$app->get('/',function(){
    echo "Everything is working!" ;
});

$app->run();
