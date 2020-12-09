<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9;

use _PhpScoperdf15f2b748e9\PhpParser\BuilderFactory;
use _PhpScoperdf15f2b748e9\PhpParser\NodeFinder;
use _PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperdf15f2b748e9\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperdf15f2b748e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperdf15f2b748e9\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperdf15f2b748e9\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperdf15f2b748e9\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
