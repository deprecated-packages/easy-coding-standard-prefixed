<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d;

use _PhpScoper065e4ba46e6d\PhpParser\BuilderFactory;
use _PhpScoper065e4ba46e6d\PhpParser\NodeFinder;
use _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper065e4ba46e6d\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper065e4ba46e6d\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper065e4ba46e6d\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper065e4ba46e6d\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
