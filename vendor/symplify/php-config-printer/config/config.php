<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d;

use _PhpScopera1a51450b61d\PhpParser\BuilderFactory;
use _PhpScopera1a51450b61d\PhpParser\NodeFinder;
use _PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera1a51450b61d\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera1a51450b61d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera1a51450b61d\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera1a51450b61d\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera1a51450b61d\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
