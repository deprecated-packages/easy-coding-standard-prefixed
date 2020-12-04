<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06;

use _PhpScopera04bf8e97c06\PhpParser\BuilderFactory;
use _PhpScopera04bf8e97c06\PhpParser\NodeFinder;
use _PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera04bf8e97c06\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera04bf8e97c06\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera04bf8e97c06\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera04bf8e97c06\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
