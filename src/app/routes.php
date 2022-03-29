<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Index', 'action' => 'home']);
$router->addRoute('about', ['controller' => 'Index', 'action' => 'about']);
$router->addRoute('products', ['controller' => 'Index', 'action' => 'products']);
$router->addRoute('contact', ['controller' => 'Index', 'action' => 'contact']);
$router->addRoute('terms', ['controller' => 'Index', 'action' => 'terms']);
$router->addRoute('login', ['controller' => 'Index', 'action' => 'login']);
$router->addRoute('signup', ['controller' => 'Index', 'action' => 'signup']);
$router->addRoute('forgot', ['controller' => 'Index', 'action' => 'forgot']);

$router->setParams(getUri());