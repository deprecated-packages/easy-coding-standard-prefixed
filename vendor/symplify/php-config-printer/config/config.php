<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e;

use _PhpScoperd1a5bf00e83e\PhpParser\BuilderFactory;
use _PhpScoperd1a5bf00e83e\PhpParser\NodeFinder;
use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperd1a5bf00e83e\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperd1a5bf00e83e\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperd1a5bf00e83e\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
