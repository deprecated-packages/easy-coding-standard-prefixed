<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972;

use _PhpScoperdeea1786e972\PhpParser\BuilderFactory;
use _PhpScoperdeea1786e972\PhpParser\NodeFinder;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperdeea1786e972\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperdeea1786e972\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperdeea1786e972\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperdeea1786e972\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
