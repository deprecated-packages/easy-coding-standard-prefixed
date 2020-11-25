<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d;

use _PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Differ;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdc8fbcd7c69d\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdc8fbcd7c69d\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdc8fbcd7c69d\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
