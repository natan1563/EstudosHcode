<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8503fbf382bc2dadcc195abd48e9e31a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8503fbf382bc2dadcc195abd48e9e31a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8503fbf382bc2dadcc195abd48e9e31a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8503fbf382bc2dadcc195abd48e9e31a::$classMap;

        }, null, ClassLoader::class);
    }
}
