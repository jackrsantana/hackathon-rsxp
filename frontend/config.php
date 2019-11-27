<?php
    $autoload = function($class){
        if ($class=='Email'){
            require_once('classes/PHPMailer/PHPMailerAutoload.php');
        }

        include('classes/' . $class . '.php');
    };

    spl_autoload_register($autoload);
    
    define('INCLUDE_PATH', 'http://localhost/hackathon/');
?>