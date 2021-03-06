<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9b4c63d399580496cd95b86c03bb05d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BS\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BS\\' => 
        array (
            0 => __DIR__ . '/..' . '/BS',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9b4c63d399580496cd95b86c03bb05d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9b4c63d399580496cd95b86c03bb05d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9b4c63d399580496cd95b86c03bb05d::$classMap;

        }, null, ClassLoader::class);
    }
}
