<?php

require_once './vendor/autoload.php';

spl_autoload_register(function ($class) {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/controllers/';
        require_once $path . $class . '.php';
});