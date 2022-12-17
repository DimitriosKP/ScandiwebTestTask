<?php

    spl_autoload_register('myAutoloader');

    function myAutoloader($class) {

        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url, 'includes') !== false) {
            $class = str_replace("\\", "/", $class);
            $path = '../classes/';
        } else {
            $class = str_replace("\\", "/", $class);
            $path = 'classes/';
        }

        $extension = '.class.php';
        $fullPath = $path . $class . $extension;

        require_once $fullPath;
}