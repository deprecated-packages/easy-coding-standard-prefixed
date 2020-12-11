<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314;

use _PhpScoper1e80a2e03314\PhpParser\BuilderFactory;
use _PhpScoper1e80a2e03314\PhpParser\NodeFinder;
use _PhpScoper1e80a2e03314\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper1e80a2e03314\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper1e80a2e03314\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper1e80a2e03314\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper1e80a2e03314\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper1e80a2e03314\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
