<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27a0c8f538c7b80b2b63d53e3e0e7c3b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27a0c8f538c7b80b2b63d53e3e0e7c3b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27a0c8f538c7b80b2b63d53e3e0e7c3b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
