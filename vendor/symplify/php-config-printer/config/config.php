<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b;

use _PhpScoper629192f0909b\PhpParser\BuilderFactory;
use _PhpScoper629192f0909b\PhpParser\NodeFinder;
use _PhpScoper629192f0909b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper629192f0909b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper629192f0909b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper629192f0909b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper629192f0909b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper629192f0909b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
