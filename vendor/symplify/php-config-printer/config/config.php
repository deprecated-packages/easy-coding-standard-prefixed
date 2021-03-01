<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed;

use _PhpScoper06c5fb6c14ed\PhpParser\BuilderFactory;
use _PhpScoper06c5fb6c14ed\PhpParser\NodeFinder;
use _PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper06c5fb6c14ed\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
return static function (\_PhpScoper06c5fb6c14ed\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper06c5fb6c14ed\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper06c5fb6c14ed\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper06c5fb6c14ed\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
