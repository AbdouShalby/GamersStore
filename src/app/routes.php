<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'Index', 'action' => 'home']);
$router->addRoute('about', ['controller' => 'About', 'action' => 'about']);
$router->addRoute('products', ['controller' => 'Product', 'action' => 'products']);
$router->addRoute('contact', ['controller' => 'Contact', 'action' => 'contact']);
$router->addRoute('terms', ['controller' => 'Terms', 'action' => 'terms']);
$router->addRoute('login', ['controller' => 'Login', 'action' => 'login']);
$router->addRoute('signup', ['controller' => 'Signup', 'action' => 'signup']);
$router->addRoute('forgot', ['controller' => 'Forgot', 'action' => 'forgot']);

$router->setParams(getUri());