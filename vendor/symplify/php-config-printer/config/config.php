<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04;

use _PhpScopere4fa57261c04\PhpParser\BuilderFactory;
use _PhpScopere4fa57261c04\PhpParser\NodeFinder;
use _PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopere4fa57261c04\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopere4fa57261c04\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopere4fa57261c04\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopere4fa57261c04\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopere4fa57261c04\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
