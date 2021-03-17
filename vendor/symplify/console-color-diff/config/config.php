<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487;

use _PhpScopera3425146d487\SebastianBergmann\Diff\Differ;
use _PhpScopera3425146d487\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera3425146d487\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopera3425146d487\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera3425146d487\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera3425146d487\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera3425146d487\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera3425146d487\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
