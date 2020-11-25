<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1;

use _PhpScoperaa402dd1b1f1\SebastianBergmann\Diff\Differ;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaa402dd1b1f1\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperaa402dd1b1f1\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperaa402dd1b1f1\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
