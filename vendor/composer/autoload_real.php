<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb1db4e2b0aa0c499a12f652b9efb04f5
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

        spl_autoload_register(array('ComposerAutoloaderInitb1db4e2b0aa0c499a12f652b9efb04f5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb1db4e2b0aa0c499a12f652b9efb04f5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb1db4e2b0aa0c499a12f652b9efb04f5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
