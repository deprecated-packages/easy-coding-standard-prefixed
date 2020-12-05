<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60;

use _PhpScoperc83f84c90b60\PhpParser\BuilderFactory;
use _PhpScoperc83f84c90b60\PhpParser\NodeFinder;
use _PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc83f84c90b60\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperc83f84c90b60\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperc83f84c90b60\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperc83f84c90b60\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
