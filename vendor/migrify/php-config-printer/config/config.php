<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f;

use _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoper229e8121cf9f\PhpParser\BuilderFactory;
use _PhpScoper229e8121cf9f\PhpParser\NodeFinder;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper229e8121cf9f\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoper229e8121cf9f\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoper229e8121cf9f\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper229e8121cf9f\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper229e8121cf9f\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper229e8121cf9f\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
