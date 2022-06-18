<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3e0150366ec1b618e0ab8bdbabecd9e7
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3e0150366ec1b618e0ab8bdbabecd9e7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3e0150366ec1b618e0ab8bdbabecd9e7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3e0150366ec1b618e0ab8bdbabecd9e7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
