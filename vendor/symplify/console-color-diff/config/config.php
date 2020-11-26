<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736;

use _PhpScopercb217fd4e736\SebastianBergmann\Diff\Differ;
use _PhpScopercb217fd4e736\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercb217fd4e736\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopercb217fd4e736\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
