<?php /** @noinspection PhpIncludeInspection */
// Load Config
require_once 'configs/config.php';

// Autoload Core libraries
spl_autoload_register(function ($className){
   require_once 'libraries/' . $className .'.php';
});