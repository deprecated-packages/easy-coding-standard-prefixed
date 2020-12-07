<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f;

use _PhpScoperb83706991c7f\SebastianBergmann\Diff\Differ;
use _PhpScoperb83706991c7f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb83706991c7f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb83706991c7f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
