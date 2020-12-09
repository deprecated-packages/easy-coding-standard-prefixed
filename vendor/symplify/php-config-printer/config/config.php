<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0;

use _PhpScoperf65af7a6d9a0\PhpParser\BuilderFactory;
use _PhpScoperf65af7a6d9a0\PhpParser\NodeFinder;
use _PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperf65af7a6d9a0\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperf65af7a6d9a0\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperf65af7a6d9a0\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperf65af7a6d9a0\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
