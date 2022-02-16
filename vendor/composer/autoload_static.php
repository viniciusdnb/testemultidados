<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10801e0dd2354a51842afb3e696b88b6
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'p' => 
        array (
            'public\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10801e0dd2354a51842afb3e696b88b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10801e0dd2354a51842afb3e696b88b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10801e0dd2354a51842afb3e696b88b6::$classMap;

        }, null, ClassLoader::class);
    }
}
