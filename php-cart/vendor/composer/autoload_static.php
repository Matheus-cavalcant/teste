<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b7c67ad318ef4f090b3363191733472
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\classes\\Cart' => __DIR__ . '/../..' . '/app/classes/Cart.php',
        'app\\classes\\CartProducts' => __DIR__ . '/../..' . '/app/classes/CartProducts.php',
        'app\\database\\Connect' => __DIR__ . '/../..' . '/app/database/Connect.php',
        'app\\database\\models\\Model' => __DIR__ . '/../..' . '/app/database/models/Model.php',
        'app\\database\\models\\Read' => __DIR__ . '/../..' . '/app/database/models/Read.php',
        'app\\interfaces\\CartInterface' => __DIR__ . '/../..' . '/app/interfaces/CartInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b7c67ad318ef4f090b3363191733472::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b7c67ad318ef4f090b3363191733472::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b7c67ad318ef4f090b3363191733472::$classMap;

        }, null, ClassLoader::class);
    }
}
