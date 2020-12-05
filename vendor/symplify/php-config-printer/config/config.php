<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1;

use _PhpScoperaba240c3d5f1\PhpParser\BuilderFactory;
use _PhpScoperaba240c3d5f1\PhpParser\NodeFinder;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperaba240c3d5f1\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperaba240c3d5f1\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperaba240c3d5f1\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperaba240c3d5f1\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
