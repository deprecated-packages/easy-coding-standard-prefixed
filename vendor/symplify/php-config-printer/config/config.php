<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99;

use _PhpScoperfab1bfb7ec99\PhpParser\BuilderFactory;
use _PhpScoperfab1bfb7ec99\PhpParser\NodeFinder;
use _PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfab1bfb7ec99\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperfab1bfb7ec99\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperfab1bfb7ec99\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperfab1bfb7ec99\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperfab1bfb7ec99\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
