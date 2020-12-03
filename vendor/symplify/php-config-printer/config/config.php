<?php

declare (strict_types=1);
namespace _PhpScoper5c006f5f032f;

use _PhpScoper5c006f5f032f\PhpParser\BuilderFactory;
use _PhpScoper5c006f5f032f\PhpParser\NodeFinder;
use _PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper5c006f5f032f\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper5c006f5f032f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper5c006f5f032f\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper5c006f5f032f\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper5c006f5f032f\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
