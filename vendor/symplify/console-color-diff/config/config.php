<?php

declare (strict_types=1);
namespace _PhpScoperdebd9d705540;

use _PhpScoperdebd9d705540\SebastianBergmann\Diff\Differ;
use _PhpScoperdebd9d705540\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdebd9d705540\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdebd9d705540\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
