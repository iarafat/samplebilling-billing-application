<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbe3f46728d704ce04ec886333fe1b78
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbe3f46728d704ce04ec886333fe1b78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbe3f46728d704ce04ec886333fe1b78::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
