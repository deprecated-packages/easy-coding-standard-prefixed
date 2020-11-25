<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c;

use _PhpScoperd301db66c80c\SebastianBergmann\Diff\Differ;
use _PhpScoperd301db66c80c\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd301db66c80c\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd301db66c80c\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd301db66c80c\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
