<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76;

use _PhpScoperd675aaf00c76\SebastianBergmann\Diff\Differ;
use _PhpScoperd675aaf00c76\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd675aaf00c76\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd675aaf00c76\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd675aaf00c76\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
