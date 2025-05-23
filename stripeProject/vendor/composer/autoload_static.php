<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0c3a2775b00960fe183df9a51533164
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0c3a2775b00960fe183df9a51533164::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0c3a2775b00960fe183df9a51533164::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0c3a2775b00960fe183df9a51533164::$classMap;

        }, null, ClassLoader::class);
    }
}
