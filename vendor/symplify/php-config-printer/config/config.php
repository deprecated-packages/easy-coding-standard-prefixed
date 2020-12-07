<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb;

use _PhpScoperda2604e33acb\PhpParser\BuilderFactory;
use _PhpScoperda2604e33acb\PhpParser\NodeFinder;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperda2604e33acb\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperda2604e33acb\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperda2604e33acb\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperda2604e33acb\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
