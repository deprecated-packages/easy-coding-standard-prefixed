<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df;

use _PhpScoperfcee700af3df\PhpParser\BuilderFactory;
use _PhpScoperfcee700af3df\PhpParser\NodeFinder;
use _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfcee700af3df\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
return static function (\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperfcee700af3df\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperfcee700af3df\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperfcee700af3df\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
