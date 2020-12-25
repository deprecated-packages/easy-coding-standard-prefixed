<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a;

use _PhpScoper7c1f54fd2f3a\PhpParser\BuilderFactory;
use _PhpScoper7c1f54fd2f3a\PhpParser\NodeFinder;
use _PhpScoper7c1f54fd2f3a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper7c1f54fd2f3a\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper7c1f54fd2f3a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper7c1f54fd2f3a\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper7c1f54fd2f3a\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper7c1f54fd2f3a\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
