<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238;

use _PhpScoperc7c7dddc9238\PhpParser\BuilderFactory;
use _PhpScoperc7c7dddc9238\PhpParser\NodeFinder;
use _PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc7c7dddc9238\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperc7c7dddc9238\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperc7c7dddc9238\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperc7c7dddc9238\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
