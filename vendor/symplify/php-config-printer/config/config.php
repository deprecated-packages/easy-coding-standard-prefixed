<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab;

use _PhpScopera37d6fb0b1ab\PhpParser\BuilderFactory;
use _PhpScopera37d6fb0b1ab\PhpParser\NodeFinder;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera37d6fb0b1ab\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera37d6fb0b1ab\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera37d6fb0b1ab\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
