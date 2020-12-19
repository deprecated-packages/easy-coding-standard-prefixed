<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b;

use _PhpScoperfb2c402b972b\SebastianBergmann\Diff\Differ;
use _PhpScoperfb2c402b972b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfb2c402b972b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfb2c402b972b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
