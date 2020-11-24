<?php

declare (strict_types=1);
namespace _PhpScoperbd5fb781fe24;

use _PhpScoperbd5fb781fe24\SebastianBergmann\Diff\Differ;
use _PhpScoperbd5fb781fe24\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperbd5fb781fe24\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperbd5fb781fe24\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperbd5fb781fe24\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
