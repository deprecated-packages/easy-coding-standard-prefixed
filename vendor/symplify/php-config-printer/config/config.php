<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d;

use _PhpScoper87c77ad5700d\PhpParser\BuilderFactory;
use _PhpScoper87c77ad5700d\PhpParser\NodeFinder;
use _PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper87c77ad5700d\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper87c77ad5700d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper87c77ad5700d\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper87c77ad5700d\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper87c77ad5700d\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
