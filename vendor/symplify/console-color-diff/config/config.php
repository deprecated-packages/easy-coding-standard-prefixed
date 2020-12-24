<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab;

use _PhpScopera37d6fb0b1ab\SebastianBergmann\Diff\Differ;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera37d6fb0b1ab\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera37d6fb0b1ab\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
