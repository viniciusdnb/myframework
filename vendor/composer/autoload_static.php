<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit701c2254a3366cd34169b3503cd78a92
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'p' => 
        array (
            'public\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit701c2254a3366cd34169b3503cd78a92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit701c2254a3366cd34169b3503cd78a92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit701c2254a3366cd34169b3503cd78a92::$classMap;

        }, null, ClassLoader::class);
    }
}