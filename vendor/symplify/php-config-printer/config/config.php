<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c;

use _PhpScoperb6a8e65b492c\PhpParser\BuilderFactory;
use _PhpScoperb6a8e65b492c\PhpParser\NodeFinder;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperb6a8e65b492c\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperb6a8e65b492c\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperb6a8e65b492c\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperb6a8e65b492c\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
