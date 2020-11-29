<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad;

use _PhpScoper9d73a84b09ad\SebastianBergmann\Diff\Differ;
use _PhpScoper9d73a84b09ad\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper9d73a84b09ad\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper9d73a84b09ad\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
