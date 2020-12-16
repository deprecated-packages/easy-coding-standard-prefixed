<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09;

use _PhpScoperd35c27cd4b09\PhpParser\BuilderFactory;
use _PhpScoperd35c27cd4b09\PhpParser\NodeFinder;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperd35c27cd4b09\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperd35c27cd4b09\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperd35c27cd4b09\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperd35c27cd4b09\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
