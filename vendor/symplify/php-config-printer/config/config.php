<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad;

use _PhpScoper9d73a84b09ad\PhpParser\BuilderFactory;
use _PhpScoper9d73a84b09ad\PhpParser\NodeFinder;
use _PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper9d73a84b09ad\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper9d73a84b09ad\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper9d73a84b09ad\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper9d73a84b09ad\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper9d73a84b09ad\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
