<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb;

use _PhpScoperb73f9e44f4eb\PhpParser\BuilderFactory;
use _PhpScoperb73f9e44f4eb\PhpParser\NodeFinder;
use _PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperb73f9e44f4eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperb73f9e44f4eb\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperb73f9e44f4eb\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperb73f9e44f4eb\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
