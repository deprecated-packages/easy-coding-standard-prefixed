<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd;

use _PhpScoperba24099fc6fd\PhpParser\BuilderFactory;
use _PhpScoperba24099fc6fd\PhpParser\NodeFinder;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperba24099fc6fd\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperba24099fc6fd\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperba24099fc6fd\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperba24099fc6fd\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
