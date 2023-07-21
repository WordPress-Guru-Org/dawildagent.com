<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit586517a8e560847d254828ca601534a7
{
    public static $files = array (
        '7166494aeff09009178f278afd86c83f' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p13.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SiteGround_Helper\\' => 18,
            'SiteGround_Central\\' => 19,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'CharlesRumley\\Tests\\' => 20,
            'CharlesRumley\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SiteGround_Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/siteground/siteground-helper/src',
        ),
        'SiteGround_Central\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'CharlesRumley\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/charles-rumley/php-po-to-json/tests',
        ),
        'CharlesRumley\\' => 
        array (
            0 => __DIR__ . '/..' . '/charles-rumley/php-po-to-json/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sepia' => 
            array (
                0 => __DIR__ . '/..' . '/sepia/po-parser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit586517a8e560847d254828ca601534a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit586517a8e560847d254828ca601534a7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit586517a8e560847d254828ca601534a7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit586517a8e560847d254828ca601534a7::$classMap;

        }, null, ClassLoader::class);
    }
}