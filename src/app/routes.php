<?php 

// Static pages routes
$router->addRoute('', ['controller' => 'IndexController', 'action' => 'home']);
$router->addRoute('about', ['controller' => 'AboutController', 'action' => 'about']);
$router->addRoute('products', ['controller' => 'Product', 'action' => 'products']);
$router->addRoute('contact', ['controller' => 'ContactController', 'action' => 'contact']);
$router->addRoute('terms', ['controller' => 'TermsController', 'action' => 'terms']);
$router->addRoute('login', ['controller' => 'LoginController', 'action' => 'login']);
$router->addRoute('signup', ['controller' => 'SignupController', 'action' => 'signup']);
$router->addRoute('store', ['controller' => 'SignupController', 'action' => 'store']);
$router->addRoute('forgot', ['controller' => 'ForgotController', 'action' => 'forgot']);

$router->setParams(getUri());