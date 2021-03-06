<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69f1e3d91d44c6cadf4782c28051ce43
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit69f1e3d91d44c6cadf4782c28051ce43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69f1e3d91d44c6cadf4782c28051ce43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit69f1e3d91d44c6cadf4782c28051ce43::$classMap;

        }, null, ClassLoader::class);
    }
}
