<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b;

use _PhpScoper807f8e74693b\PhpParser\BuilderFactory;
use _PhpScoper807f8e74693b\PhpParser\NodeFinder;
use _PhpScoper807f8e74693b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper807f8e74693b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
return static function (\_PhpScoper807f8e74693b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper807f8e74693b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper807f8e74693b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper807f8e74693b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
