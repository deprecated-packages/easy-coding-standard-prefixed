<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use _PhpScoperd3d57724c802\SebastianBergmann\Diff\Differ;
use _PhpScoperd3d57724c802\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperd3d57724c802\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperd3d57724c802\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
