<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4727002b9018d9a11bfe2d456f91783e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mbsp\\Sisken\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mbsp\\Sisken\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4727002b9018d9a11bfe2d456f91783e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4727002b9018d9a11bfe2d456f91783e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4727002b9018d9a11bfe2d456f91783e::$classMap;

        }, null, ClassLoader::class);
    }
}
