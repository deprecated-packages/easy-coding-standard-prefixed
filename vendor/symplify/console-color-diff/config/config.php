<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a;

use _PhpScoperc8b83ee8976a\SebastianBergmann\Diff\Differ;
use _PhpScoperc8b83ee8976a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc8b83ee8976a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc8b83ee8976a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
