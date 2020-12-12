<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb;

use _PhpScoperef870243cfdb\SebastianBergmann\Diff\Differ;
use _PhpScoperef870243cfdb\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperef870243cfdb\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperef870243cfdb\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
