<?php

declare (strict_types=1);
namespace _PhpScoper6d28bdf6a7f9;

use _PhpScoper6d28bdf6a7f9\SebastianBergmann\Diff\Differ;
use _PhpScoper6d28bdf6a7f9\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper6d28bdf6a7f9\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper6d28bdf6a7f9\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper6d28bdf6a7f9\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
