<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b;

use _PhpScopera40fc53e636b\PhpParser\BuilderFactory;
use _PhpScopera40fc53e636b\PhpParser\NodeFinder;
use _PhpScopera40fc53e636b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera40fc53e636b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera40fc53e636b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera40fc53e636b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera40fc53e636b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera40fc53e636b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
