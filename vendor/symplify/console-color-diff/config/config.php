<?php

declare (strict_types=1);
namespace _PhpScoper190659c42b56;

use _PhpScoper190659c42b56\SebastianBergmann\Diff\Differ;
use _PhpScoper190659c42b56\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper190659c42b56\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper190659c42b56\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper190659c42b56\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
