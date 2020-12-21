<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033;

use _PhpScoperfcf15c26e033\PhpParser\BuilderFactory;
use _PhpScoperfcf15c26e033\PhpParser\NodeFinder;
use _PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfcf15c26e033\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperfcf15c26e033\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperfcf15c26e033\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperfcf15c26e033\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperfcf15c26e033\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
