<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb;

use _PhpScoper58a0a169dcfb\PhpParser\BuilderFactory;
use _PhpScoper58a0a169dcfb\PhpParser\NodeFinder;
use _PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper58a0a169dcfb\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper58a0a169dcfb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper58a0a169dcfb\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper58a0a169dcfb\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper58a0a169dcfb\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
