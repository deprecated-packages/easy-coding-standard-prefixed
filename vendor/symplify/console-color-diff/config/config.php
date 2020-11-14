<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098;

use _PhpScopercda2b863d098\SebastianBergmann\Diff\Differ;
use _PhpScopercda2b863d098\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopercda2b863d098\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopercda2b863d098\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
