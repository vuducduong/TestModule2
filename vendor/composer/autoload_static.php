<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd0df3d51182a11e3bdc0ceacc8ced92
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd0df3d51182a11e3bdc0ceacc8ced92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd0df3d51182a11e3bdc0ceacc8ced92::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
