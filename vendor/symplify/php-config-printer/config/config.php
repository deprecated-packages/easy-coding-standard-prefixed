<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147;

use _PhpScoperba5852cc6147\PhpParser\BuilderFactory;
use _PhpScoperba5852cc6147\PhpParser\NodeFinder;
use _PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperba5852cc6147\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperba5852cc6147\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperba5852cc6147\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperba5852cc6147\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
