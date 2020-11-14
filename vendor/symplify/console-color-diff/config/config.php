<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2;

use _PhpScopera749ac204cd2\SebastianBergmann\Diff\Differ;
use _PhpScopera749ac204cd2\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera749ac204cd2\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera749ac204cd2\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera749ac204cd2\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
