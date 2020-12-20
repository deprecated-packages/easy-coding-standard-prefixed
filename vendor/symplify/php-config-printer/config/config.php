<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97;

use _PhpScoperab9510cd5d97\PhpParser\BuilderFactory;
use _PhpScoperab9510cd5d97\PhpParser\NodeFinder;
use _PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperab9510cd5d97\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperab9510cd5d97\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperab9510cd5d97\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperab9510cd5d97\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperab9510cd5d97\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
