<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f;

use _PhpScoperb83706991c7f\PhpParser\BuilderFactory;
use _PhpScoperb83706991c7f\PhpParser\NodeFinder;
use _PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperb83706991c7f\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperb83706991c7f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperb83706991c7f\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperb83706991c7f\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperb83706991c7f\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
