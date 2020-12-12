<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b;

use _PhpScoperdaf95aff095b\SebastianBergmann\Diff\Differ;
use _PhpScoperdaf95aff095b\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperdaf95aff095b\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperdaf95aff095b\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
