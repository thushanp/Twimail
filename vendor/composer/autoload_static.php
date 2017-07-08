<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac21362738dc325c48b21b357866b16f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac21362738dc325c48b21b357866b16f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac21362738dc325c48b21b357866b16f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
