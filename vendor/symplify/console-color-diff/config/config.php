<?php

declare (strict_types=1);
namespace _PhpScoper4fedb9aa1e5f;

use _PhpScoper4fedb9aa1e5f\SebastianBergmann\Diff\Differ;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(Differ::class);
    $services->set(SymfonyStyleFactory::class);
    $services->set(SymfonyStyle::class)->factory([service(SymfonyStyleFactory::class), 'create']);
    $services->set(PrivatesAccessor::class);
};
