<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a63923e095f9d972ff77114152e43ff
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Th\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Th\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a63923e095f9d972ff77114152e43ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a63923e095f9d972ff77114152e43ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
