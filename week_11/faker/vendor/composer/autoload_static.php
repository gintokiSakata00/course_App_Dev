<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4027be6977673899e9f2d5e7c775baab
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4027be6977673899e9f2d5e7c775baab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4027be6977673899e9f2d5e7c775baab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4027be6977673899e9f2d5e7c775baab::$classMap;

        }, null, ClassLoader::class);
    }
}
