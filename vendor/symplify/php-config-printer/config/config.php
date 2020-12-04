<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73;

use _PhpScopera4fc793dae73\PhpParser\BuilderFactory;
use _PhpScopera4fc793dae73\PhpParser\NodeFinder;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera4fc793dae73\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera4fc793dae73\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera4fc793dae73\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera4fc793dae73\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
