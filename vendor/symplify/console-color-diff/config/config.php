<?php

declare (strict_types=1);
namespace _PhpScoper0b185984cfb7;

use _PhpScoper0b185984cfb7\SebastianBergmann\Diff\Differ;
use _PhpScoper0b185984cfb7\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper0b185984cfb7\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper0b185984cfb7\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
