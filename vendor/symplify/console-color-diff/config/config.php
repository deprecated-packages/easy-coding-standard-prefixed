<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267;

use _PhpScoperad4605bb9267\SebastianBergmann\Diff\Differ;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad4605bb9267\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperad4605bb9267\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
