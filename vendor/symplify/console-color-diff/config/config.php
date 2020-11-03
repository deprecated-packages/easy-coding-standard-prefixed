<?php

declare (strict_types=1);
namespace _PhpScopercf327c47dfc5;

use _PhpScopercf327c47dfc5\SebastianBergmann\Diff\Differ;
use _PhpScopercf327c47dfc5\Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercf327c47dfc5\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopercf327c47dfc5\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopercf327c47dfc5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
