<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745;

use _PhpScoperfacc742d2745\SebastianBergmann\Diff\Differ;
use _PhpScoperfacc742d2745\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperfacc742d2745\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperfacc742d2745\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
