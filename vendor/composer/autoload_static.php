<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13a4378e50f68a00bea007f64c218ac8
{
    public static $files = array (
        '17fb97ded96743aa238d67591c8f2b12' => __DIR__ . '/../..' . '/config/constants.php',
        '05ba95e904cc7323a1bb1682fc8be97c' => __DIR__ . '/../..' . '/config/credentials.php',
        'e9815f2b6b4ba09f952e155ec42b5795' => __DIR__ . '/../..' . '/config/utilities.php',
    );

    public static $classMap = array (
        'App\\Router' => __DIR__ . '/../..' . '/src/app/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controllers\\IndexController' => __DIR__ . '/../..' . '/src/controllers/IndexController.php',
        'Controllers\\AboutController' => __DIR__ . '/../..' . '/src/controllers/AboutController.php',
        'Controllers\\ProductController' => __DIR__ . '/../..' . '/src/controllers/ProductController.php',
        'Controllers\\ContactController' => __DIR__ . '/../..' . '/src/controllers/ContactController.php',
        'Controllers\\TermsController' => __DIR__ . '/../..' . '/src/controllers/TermsController.php',
        'Controllers\\LoginController' => __DIR__ . '/../..' . '/src/controllers/LoginController.php',
        'Controllers\\SignupController' => __DIR__ . '/../..' . '/src/controllers/SignupController.php',
        'Controllers\\ForgotController' => __DIR__ . '/../..' . '/src/controllers/ForgotController.php',
        'Models\\Database' => __DIR__ . '/../..' . '/src/models/Database.php',
        'Models\\Login' => __DIR__ . '/../..' . '/src/models/Login.php',
        'Models\\Signup' => __DIR__ . '/../..' . '/src/models/Signup.php',
        'Models\\Task' => __DIR__ . '/../..' . '/src/models/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit13a4378e50f68a00bea007f64c218ac8::$classMap;

        }, null, ClassLoader::class);
    }
}
