<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55;

use _PhpScoperfcce67077a55\SebastianBergmann\Diff\Differ;
use _PhpScoperfcce67077a55\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfcce67077a55\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfcce67077a55\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfcce67077a55\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
