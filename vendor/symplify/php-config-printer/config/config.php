<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6;

use _PhpScopere050faf861e6\PhpParser\BuilderFactory;
use _PhpScopere050faf861e6\PhpParser\NodeFinder;
use _PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopere050faf861e6\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
return static function (\_PhpScopere050faf861e6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopere050faf861e6\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopere050faf861e6\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopere050faf861e6\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
