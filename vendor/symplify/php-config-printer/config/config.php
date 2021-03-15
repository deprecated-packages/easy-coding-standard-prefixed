<?php

declare (strict_types=1);
namespace _PhpScoper8163b0b2b8f3;

use _PhpScoper8163b0b2b8f3\PhpParser\BuilderFactory;
use _PhpScoper8163b0b2b8f3\PhpParser\NodeFinder;
use _PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper8163b0b2b8f3\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
return static function (\_PhpScoper8163b0b2b8f3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper8163b0b2b8f3\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper8163b0b2b8f3\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper8163b0b2b8f3\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
