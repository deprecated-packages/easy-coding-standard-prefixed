<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e;

use _PhpScoperc75fd40d7a6e\PhpParser\BuilderFactory;
use _PhpScoperc75fd40d7a6e\PhpParser\NodeFinder;
use _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperc75fd40d7a6e\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperc75fd40d7a6e\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperc75fd40d7a6e\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
