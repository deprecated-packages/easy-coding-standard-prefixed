<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc;

use _PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Differ;
use _PhpScoperddde3ba4aebc\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperddde3ba4aebc\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperddde3ba4aebc\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
