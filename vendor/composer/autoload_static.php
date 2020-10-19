<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit071f02038caeec6734edd30945477c4d
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'raft\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'raft\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/raft',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit071f02038caeec6734edd30945477c4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit071f02038caeec6734edd30945477c4d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}