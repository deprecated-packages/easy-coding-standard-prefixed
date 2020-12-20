<?php

declare (strict_types=1);
namespace _PhpScopere205696a9dd6;

use _PhpScopere205696a9dd6\PhpParser\BuilderFactory;
use _PhpScopere205696a9dd6\PhpParser\NodeFinder;
use _PhpScopere205696a9dd6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopere205696a9dd6\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopere205696a9dd6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopere205696a9dd6\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopere205696a9dd6\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopere205696a9dd6\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
