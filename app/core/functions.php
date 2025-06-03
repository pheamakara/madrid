<?php
// Helper functions

// Database connection
function db_connect() {
    static $connection;
    if (!isset($connection)) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (mysqli_connect_errno()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        mysqli_set_charset($connection, DB_CHARSET);
    }
    return $connection;
}

// Translation function for multilingual support
function __($key, $lang = null) {
    static $translations = [];
    if ($lang === null) {
        $lang = $_SESSION['language'] ?? DEFAULT_LANGUAGE;
    }

    // Load translations if not already loaded
    if (!isset($translations[$lang])) {
        $translationFile = APP_ROOT . "/app/lang/$lang.php";
        if (file_exists($translationFile)) {
            $translations[$lang] = require $translationFile;
        } else {
            $translations[$lang] = [];
        }
    }

    return $translations[$lang][$key] ?? $key;
}

// Basic authentication check
function is_authenticated() {
    return isset($_SESSION['user_id']);
}

// Check if user has admin role
function is_admin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

// Get current URL
function current_url() {
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . 
           "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
