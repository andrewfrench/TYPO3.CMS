<?php

// autoload_alias_loader_real.php @generated by typo3/class-alias-loader

class ClassAliasLoaderInit03fcc36b817d2be2c78be4a94c472960 {

    private static $loader;

    public static function initializeClassAliasLoader($composerClassLoader) {
        if (null !== self::$loader) {
            return self::$loader;
        }
        self::$loader = $composerClassLoader;

        $classAliasMap = require __DIR__ . '/autoload_classaliasmap.php';
        $classAliasLoader = new TYPO3\ClassAliasLoader\ClassAliasLoader($composerClassLoader);
        $classAliasLoader->setAliasMap($classAliasMap);
        $classAliasLoader->setCaseSensitiveClassLoading(true);
        $classAliasLoader->register(true);

        TYPO3\ClassAliasLoader\ClassAliasMap::setClassAliasLoader($classAliasLoader);

        return self::$loader;
    }
}
