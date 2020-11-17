<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8;

use _PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Differ;
use _PhpScoperad4b7e2c09d8\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperad4b7e2c09d8\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperad4b7e2c09d8\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
