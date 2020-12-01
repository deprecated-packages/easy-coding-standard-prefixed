<?php

declare (strict_types=1);
namespace _PhpScoperad68e34a80c5;

use _PhpScoperad68e34a80c5\PhpParser\BuilderFactory;
use _PhpScoperad68e34a80c5\PhpParser\NodeFinder;
use _PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperad68e34a80c5\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperad68e34a80c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperad68e34a80c5\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperad68e34a80c5\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperad68e34a80c5\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
