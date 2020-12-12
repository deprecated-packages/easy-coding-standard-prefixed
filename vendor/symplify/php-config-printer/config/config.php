<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b;

use _PhpScoperdaf95aff095b\PhpParser\BuilderFactory;
use _PhpScoperdaf95aff095b\PhpParser\NodeFinder;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperdaf95aff095b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperdaf95aff095b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperdaf95aff095b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperdaf95aff095b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
