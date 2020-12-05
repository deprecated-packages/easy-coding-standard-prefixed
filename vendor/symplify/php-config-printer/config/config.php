<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe;

use _PhpScoper81b3ff5ab9fe\PhpParser\BuilderFactory;
use _PhpScoper81b3ff5ab9fe\PhpParser\NodeFinder;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper81b3ff5ab9fe\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper81b3ff5ab9fe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper81b3ff5ab9fe\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper81b3ff5ab9fe\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper81b3ff5ab9fe\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
