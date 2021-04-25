<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('AutoloadIncluder', false) && !interface_exists('AutoloadIncluder', false) && !trait_exists('AutoloadIncluder', false)) {
    spl_autoload_call('_PhpScoper96c81c3c1716\AutoloadIncluder');
}
if (!class_exists('Composer\InstalledVersions', false) && !interface_exists('Composer\InstalledVersions', false) && !trait_exists('Composer\InstalledVersions', false)) {
    spl_autoload_call('_PhpScoper96c81c3c1716\Composer\InstalledVersions');
}
if (!class_exists('ComposerAutoloaderInit84676d5911441ca53ade2f144509f012', false) && !interface_exists('ComposerAutoloaderInit84676d5911441ca53ade2f144509f012', false) && !trait_exists('ComposerAutoloaderInit84676d5911441ca53ade2f144509f012', false)) {
    spl_autoload_call('_PhpScoper96c81c3c1716\ComposerAutoloaderInit84676d5911441ca53ade2f144509f012');
}
if (!class_exists('Symfony\Component\DependencyInjection\Extension\ExtensionInterface', false) && !interface_exists('Symfony\Component\DependencyInjection\Extension\ExtensionInterface', false) && !trait_exists('Symfony\Component\DependencyInjection\Extension\ExtensionInterface', false)) {
    spl_autoload_call('_PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Extension\ExtensionInterface');
}
if (!class_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !interface_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !trait_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false)) {
    spl_autoload_call('_PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequire84676d5911441ca53ade2f144509f012')) {
    function composerRequire84676d5911441ca53ade2f144509f012() {
        return \_PhpScoper96c81c3c1716\composerRequire84676d5911441ca53ade2f144509f012(...func_get_args());
    }
}
if (!function_exists('sample')) {
    function sample() {
        return \_PhpScoper96c81c3c1716\sample(...func_get_args());
    }
}
if (!function_exists('foo')) {
    function foo() {
        return \_PhpScoper96c81c3c1716\foo(...func_get_args());
    }
}
if (!function_exists('bar')) {
    function bar() {
        return \_PhpScoper96c81c3c1716\bar(...func_get_args());
    }
}
if (!function_exists('baz')) {
    function baz() {
        return \_PhpScoper96c81c3c1716\baz(...func_get_args());
    }
}
if (!function_exists('xyz')) {
    function xyz() {
        return \_PhpScoper96c81c3c1716\xyz(...func_get_args());
    }
}
if (!function_exists('printPHPCodeSnifferTestOutput')) {
    function printPHPCodeSnifferTestOutput() {
        return \_PhpScoper96c81c3c1716\printPHPCodeSnifferTestOutput(...func_get_args());
    }
}
if (!function_exists('setproctitle')) {
    function setproctitle() {
        return \_PhpScoper96c81c3c1716\setproctitle(...func_get_args());
    }
}
if (!function_exists('xdebug_info')) {
    function xdebug_info() {
        return \_PhpScoper96c81c3c1716\xdebug_info(...func_get_args());
    }
}
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \_PhpScoper96c81c3c1716\includeIfExists(...func_get_args());
    }
}
if (!function_exists('dump')) {
    function dump() {
        return \_PhpScoper96c81c3c1716\dump(...func_get_args());
    }
}
if (!function_exists('dd')) {
    function dd() {
        return \_PhpScoper96c81c3c1716\dd(...func_get_args());
    }
}

return $loader;
