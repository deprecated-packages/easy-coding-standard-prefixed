<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use _PhpScoperc4ea0f0bd23f\PhpParser\BuilderFactory;
use _PhpScoperc4ea0f0bd23f\PhpParser\NodeFinder;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperc4ea0f0bd23f\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperc4ea0f0bd23f\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperc4ea0f0bd23f\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
