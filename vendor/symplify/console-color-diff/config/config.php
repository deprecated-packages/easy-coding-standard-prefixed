<?php

declare (strict_types=1);
namespace _PhpScopera909b9d9be2e;

use _PhpScopera909b9d9be2e\SebastianBergmann\Diff\Differ;
use _PhpScopera909b9d9be2e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera909b9d9be2e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera909b9d9be2e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera909b9d9be2e\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
