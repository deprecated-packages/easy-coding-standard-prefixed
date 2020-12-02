<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40;

use _PhpScopera34ae19e8d40\PhpParser\BuilderFactory;
use _PhpScopera34ae19e8d40\PhpParser\NodeFinder;
use _PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera34ae19e8d40\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera34ae19e8d40\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera34ae19e8d40\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera34ae19e8d40\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
