<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d0469095e9acc40006387677e2845a0
{
    public static $files = array (
        '73292c28e99fcaef297ffcc01b0568dc' => __DIR__ . '/../..' . '/src/phpsql.class.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2d0469095e9acc40006387677e2845a0::$classMap;

        }, null, ClassLoader::class);
    }
}