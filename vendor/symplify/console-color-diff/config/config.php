<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c;

use _PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Differ;
use _PhpScoperb6a8e65b492c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb6a8e65b492c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb6a8e65b492c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
