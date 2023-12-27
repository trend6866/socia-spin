<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92f87a3d4bea435ba76dded6198df260
{
    public static $files = array (
        '5c2defbf7f7cf93c47ed4965a7eb595e' => __DIR__ . '/..' . '/seregazhuk/pinterest-bot/src/Helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'seregazhuk\\PinterestBot\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'seregazhuk\\PinterestBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/seregazhuk/pinterest-bot/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92f87a3d4bea435ba76dded6198df260::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92f87a3d4bea435ba76dded6198df260::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92f87a3d4bea435ba76dded6198df260::$classMap;

        }, null, ClassLoader::class);
    }
}
