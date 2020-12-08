<?php

declare (strict_types=1);
namespace _PhpScoper5ea36b274140;

use _PhpScoper5ea36b274140\PhpParser\BuilderFactory;
use _PhpScoper5ea36b274140\PhpParser\NodeFinder;
use _PhpScoper5ea36b274140\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper5ea36b274140\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper5ea36b274140\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper5ea36b274140\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper5ea36b274140\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper5ea36b274140\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
