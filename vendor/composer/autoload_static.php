<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec1fe70240fd50b92cbf51f1d9068441
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'omz13\\' => 6,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'omz13\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'omz13\\XMLSitemap' => __DIR__ . '/../..' . '/src/xmlsitemap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec1fe70240fd50b92cbf51f1d9068441::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec1fe70240fd50b92cbf51f1d9068441::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec1fe70240fd50b92cbf51f1d9068441::$classMap;

        }, null, ClassLoader::class);
    }
}
