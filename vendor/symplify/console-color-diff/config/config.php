<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5;

use _PhpScoperac4e86be08e5\SebastianBergmann\Diff\Differ;
use _PhpScoperac4e86be08e5\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperac4e86be08e5\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperac4e86be08e5\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperac4e86be08e5\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
