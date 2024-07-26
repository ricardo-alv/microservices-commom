<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c52c07cec5b4db11d1a91e5324365bd
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RicardoAlv\\MicroservicesCommom\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RicardoAlv\\MicroservicesCommom\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c52c07cec5b4db11d1a91e5324365bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c52c07cec5b4db11d1a91e5324365bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c52c07cec5b4db11d1a91e5324365bd::$classMap;

        }, null, ClassLoader::class);
    }
}
