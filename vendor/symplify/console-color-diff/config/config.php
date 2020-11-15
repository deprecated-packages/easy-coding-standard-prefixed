<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5;

use _PhpScopercb576ca159b5\SebastianBergmann\Diff\Differ;
use _PhpScopercb576ca159b5\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercb576ca159b5\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopercb576ca159b5\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
