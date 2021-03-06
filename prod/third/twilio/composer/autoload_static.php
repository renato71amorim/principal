<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb77ff5d5c3562e01f03b87cdd671be2
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb77ff5d5c3562e01f03b87cdd671be2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb77ff5d5c3562e01f03b87cdd671be2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
