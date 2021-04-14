<?php

declare (strict_types=1);
namespace _PhpScoper7b319b4d8e1c;

use _PhpScoper7b319b4d8e1c\SebastianBergmann\Diff\Differ;
use _PhpScoper7b319b4d8e1c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper7b319b4d8e1c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper7b319b4d8e1c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper7b319b4d8e1c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper7b319b4d8e1c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper7b319b4d8e1c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper7b319b4d8e1c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
