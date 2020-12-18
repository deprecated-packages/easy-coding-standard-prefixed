<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b;

use _PhpScoper4d3fa30a680b\PhpParser\BuilderFactory;
use _PhpScoper4d3fa30a680b\PhpParser\NodeFinder;
use _PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper4d3fa30a680b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper4d3fa30a680b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper4d3fa30a680b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper4d3fa30a680b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
