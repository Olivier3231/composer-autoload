<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41cea752eeb634d5f33d8fc262aecd32
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41cea752eeb634d5f33d8fc262aecd32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41cea752eeb634d5f33d8fc262aecd32::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit41cea752eeb634d5f33d8fc262aecd32::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit41cea752eeb634d5f33d8fc262aecd32::$classMap;

        }, null, ClassLoader::class);
    }
}
