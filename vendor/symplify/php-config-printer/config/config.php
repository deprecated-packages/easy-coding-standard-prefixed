<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a;

use _PhpScoperc95ae4bf942a\PhpParser\BuilderFactory;
use _PhpScoperc95ae4bf942a\PhpParser\NodeFinder;
use _PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc95ae4bf942a\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperc95ae4bf942a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperc95ae4bf942a\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperc95ae4bf942a\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperc95ae4bf942a\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
