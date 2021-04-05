<?php

declare (strict_types=1);
namespace _PhpScoperf6b7f9bf122d;

use _PhpScoperf6b7f9bf122d\SebastianBergmann\Diff\Differ;
use _PhpScoperf6b7f9bf122d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperf6b7f9bf122d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf6b7f9bf122d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf6b7f9bf122d\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
