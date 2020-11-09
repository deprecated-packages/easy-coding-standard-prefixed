<?php

declare (strict_types=1);
namespace _PhpScoperf5f75c22067b;

use _PhpScoperf5f75c22067b\SebastianBergmann\Diff\Differ;
use _PhpScoperf5f75c22067b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf5f75c22067b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf5f75c22067b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
