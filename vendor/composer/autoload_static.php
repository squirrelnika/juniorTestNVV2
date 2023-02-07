<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec17a210a44f53e7a44cf9676a6d28a1
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec17a210a44f53e7a44cf9676a6d28a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec17a210a44f53e7a44cf9676a6d28a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec17a210a44f53e7a44cf9676a6d28a1::$classMap;

        }, null, ClassLoader::class);
    }
}