<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite43dfeec0b0c9bd792f79054fde4b359
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimpleQueryBuilder\\Querybuilder\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimpleQueryBuilder\\Querybuilder\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite43dfeec0b0c9bd792f79054fde4b359::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite43dfeec0b0c9bd792f79054fde4b359::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite43dfeec0b0c9bd792f79054fde4b359::$classMap;

        }, null, ClassLoader::class);
    }
}
