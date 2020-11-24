<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f;

use _PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Differ;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfd70a7e8e84f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfd70a7e8e84f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
