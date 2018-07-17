<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5c05a9e9d21ab82b3e16ce901c791f6
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '4ceedf97791d93203e20d2cdee63c4d8' => __DIR__ . '/..' . '/funct/funct/src/Collection.php',
        '3fa95b6de8b4ba809a4086bd187dc285' => __DIR__ . '/..' . '/funct/funct/src/General.php',
        '9a6e6879c844337a8d58143b6e0512ae' => __DIR__ . '/..' . '/funct/funct/src/Invoke.php',
        'a73a3901d9218302158239badf0be56a' => __DIR__ . '/..' . '/funct/funct/src/Object.php',
        '3fdd7195df86076e7b28f4a0e5b97dbd' => __DIR__ . '/..' . '/funct/funct/src/Strings.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'F' => 
        array (
            'Funct\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Funct\\' => 
        array (
            0 => __DIR__ . '/..' . '/funct/funct/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5c05a9e9d21ab82b3e16ce901c791f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5c05a9e9d21ab82b3e16ce901c791f6::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite5c05a9e9d21ab82b3e16ce901c791f6::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
