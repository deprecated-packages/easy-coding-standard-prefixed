<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb;

use _PhpScoperb73f9e44f4eb\SebastianBergmann\Diff\Differ;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb73f9e44f4eb\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb73f9e44f4eb\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
