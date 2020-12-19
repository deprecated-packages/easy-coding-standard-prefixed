<?php

declare (strict_types=1);
namespace _PhpScoper8751341571b5;

use _PhpScoper8751341571b5\SebastianBergmann\Diff\Differ;
use _PhpScoper8751341571b5\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper8751341571b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper8751341571b5\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper8751341571b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper8751341571b5\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper8751341571b5\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper8751341571b5\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
