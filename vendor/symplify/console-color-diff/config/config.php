<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d;

use _PhpScoper87c77ad5700d\SebastianBergmann\Diff\Differ;
use _PhpScoper87c77ad5700d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper87c77ad5700d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper87c77ad5700d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
