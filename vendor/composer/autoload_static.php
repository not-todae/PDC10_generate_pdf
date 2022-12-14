<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit147c9076bb8130353caee660a00c126b
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Pdc10Pdf\\' => 14,
        ),
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Pdc10Pdf\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit147c9076bb8130353caee660a00c126b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit147c9076bb8130353caee660a00c126b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit147c9076bb8130353caee660a00c126b::$classMap;

        }, null, ClassLoader::class);
    }
}
