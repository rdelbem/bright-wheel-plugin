<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit166d43fe35b94ab40d461ed6066394c1
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BrightWheel\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BrightWheel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit166d43fe35b94ab40d461ed6066394c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit166d43fe35b94ab40d461ed6066394c1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
