<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b;

use _PhpScoperfb2c402b972b\PhpParser\BuilderFactory;
use _PhpScoperfb2c402b972b\PhpParser\NodeFinder;
use _PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfb2c402b972b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperfb2c402b972b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperfb2c402b972b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperfb2c402b972b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperfb2c402b972b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
