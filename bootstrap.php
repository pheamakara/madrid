<?php
// Application bootstrap file

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start session
session_start();

// Load configuration
if (file_exists($config = APP_ROOT . '/config/config.php')) {
    require $config;
}

// Helper functions
require APP_ROOT . '/app/core/functions.php';

// Autoload classes (Composer will handle this later)
spl_autoload_register(function ($class) {
    $file = APP_ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Initialize the application
// (Will add more initialization code later)
