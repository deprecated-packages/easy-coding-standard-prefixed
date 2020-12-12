<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb;

use _PhpScoperef870243cfdb\PhpParser\BuilderFactory;
use _PhpScoperef870243cfdb\PhpParser\NodeFinder;
use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperef870243cfdb\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperef870243cfdb\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperef870243cfdb\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperef870243cfdb\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
