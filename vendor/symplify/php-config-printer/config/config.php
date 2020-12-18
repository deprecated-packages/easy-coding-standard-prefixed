<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d;

use _PhpScoperd8b12759ee0d\PhpParser\BuilderFactory;
use _PhpScoperd8b12759ee0d\PhpParser\NodeFinder;
use _PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperd8b12759ee0d\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperd8b12759ee0d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperd8b12759ee0d\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperd8b12759ee0d\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperd8b12759ee0d\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
