<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a4b406cfc50a760f4d636089e8a5e07
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ajax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ajax\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/php-mv-ui/Ajax',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a4b406cfc50a760f4d636089e8a5e07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a4b406cfc50a760f4d636089e8a5e07::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
