<?php

declare (strict_types=1);
namespace _PhpScopercb217fd4e736;

use _PhpScopercb217fd4e736\PhpParser\BuilderFactory;
use _PhpScopercb217fd4e736\PhpParser\NodeFinder;
use _PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopercb217fd4e736\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopercb217fd4e736\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopercb217fd4e736\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopercb217fd4e736\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopercb217fd4e736\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
