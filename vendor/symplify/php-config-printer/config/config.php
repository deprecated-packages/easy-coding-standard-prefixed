<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71;

use _PhpScoperb2e2c0c42e71\PhpParser\BuilderFactory;
use _PhpScoperb2e2c0c42e71\PhpParser\NodeFinder;
use _PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperb2e2c0c42e71\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperb2e2c0c42e71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperb2e2c0c42e71\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperb2e2c0c42e71\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperb2e2c0c42e71\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
