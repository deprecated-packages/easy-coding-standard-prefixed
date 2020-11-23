<?php

declare (strict_types=1);
namespace _PhpScoper59558822d8c7;

use _PhpScoper59558822d8c7\SebastianBergmann\Diff\Differ;
use _PhpScoper59558822d8c7\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper59558822d8c7\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper59558822d8c7\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper59558822d8c7\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
