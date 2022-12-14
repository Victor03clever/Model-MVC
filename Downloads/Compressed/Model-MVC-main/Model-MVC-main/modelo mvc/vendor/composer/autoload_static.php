<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3d1b9f3fe48200d9dac0b5d43fa3ab6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3d1b9f3fe48200d9dac0b5d43fa3ab6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3d1b9f3fe48200d9dac0b5d43fa3ab6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf3d1b9f3fe48200d9dac0b5d43fa3ab6::$classMap;

        }, null, ClassLoader::class);
    }
}
