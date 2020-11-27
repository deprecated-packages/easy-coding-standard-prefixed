<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b;

use _PhpScoper578a67c80b2b\SebastianBergmann\Diff\Differ;
use _PhpScoper578a67c80b2b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper578a67c80b2b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper578a67c80b2b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper578a67c80b2b\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
