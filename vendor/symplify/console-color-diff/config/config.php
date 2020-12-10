<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c;

use _PhpScoper9ef667a5e42c\SebastianBergmann\Diff\Differ;
use _PhpScoper9ef667a5e42c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper9ef667a5e42c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper9ef667a5e42c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper9ef667a5e42c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
