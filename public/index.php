<?php
// Front controller

// Define application constants
define('APP_ROOT', dirname(__DIR__));
define('PUBLIC_ROOT', __DIR__);
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', PUBLIC_ROOT));

// Autoload classes
require APP_ROOT . '/vendor/autoload.php';

// Bootstrap the application
require APP_ROOT . '/bootstrap.php';

// Create router instance
$router = new Core\Router();

// Add routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('news', ['controller' => 'News', 'action' => 'index']);
$router->add('matches/fixtures', ['controller' => 'Match', 'action' => 'fixtures']);
$router->add('matches/stats', ['controller' => 'Match', 'action' => 'stats']);
$router->add('admin', ['controller' => 'Admin', 'action' => 'dashboard']);
$router->add('admin/login', ['controller' => 'Admin', 'action' => 'login']);
$router->add('admin/logout', ['controller' => 'Admin', 'action' => 'logout']);
$router->add('admin/posts', ['controller' => 'Admin', 'action' => 'posts']);
$router->add('team', ['controller' => 'Team', 'action' => 'index']);
$router->add('team/player/{id:\d+}', ['controller' => 'Team', 'action' => 'player']);
$router->add('language/switch/{lang:[a-z]+}', ['controller' => 'Language', 'action' => 'switch']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

// Dispatch the request
$router->dispatch($_SERVER['QUERY_STRING']);
