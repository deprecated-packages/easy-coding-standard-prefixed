<?php

declare (strict_types=1);
namespace _PhpScoper92597f5b42a7;

use _PhpScoper92597f5b42a7\PhpParser\BuilderFactory;
use _PhpScoper92597f5b42a7\PhpParser\NodeFinder;
use _PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper92597f5b42a7\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper92597f5b42a7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper92597f5b42a7\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper92597f5b42a7\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper92597f5b42a7\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
