<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fa26e59f63b759541052fd44cd6eb79
{
    public static $files = array (
        '4fb921a42d925f1af95487ee0c721d1c' => __DIR__ . '/..' . '/xenice/wp-framework/option/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'x' => 
        array (
            'xenice\\view\\' => 12,
            'xenice\\theme\\' => 13,
            'xenice\\option\\' => 14,
            'xenice\\optimize\\' => 16,
            'xenice\\model\\' => 13,
            'xenice\\mail\\' => 12,
            'xenice\\cache\\' => 13,
            'xenice\\login\\' => 13,
            'xenice\\profession\\' => 18,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'xenice\\view\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/view',
        ),
        'xenice\\theme\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/theme',
        ),
        'xenice\\option\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/option',
        ),
        'xenice\\optimize\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/optimize',
        ),
        'xenice\\model\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/model',
        ),
        'xenice\\mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/mail',
        ),
        'xenice\\cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-framework/cache',
        ),
        'xenice\\login\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-login/src',
        ),
        'xenice\\profession\\' => 
        array (
            0 => __DIR__ . '/..' . '/xenice/wp-profession/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fa26e59f63b759541052fd44cd6eb79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fa26e59f63b759541052fd44cd6eb79::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
