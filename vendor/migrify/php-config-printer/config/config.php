<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8;

use _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoper239b374a39c8\PhpParser\BuilderFactory;
use _PhpScoper239b374a39c8\PhpParser\NodeFinder;
use _PhpScoper239b374a39c8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper239b374a39c8\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper239b374a39c8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoper239b374a39c8\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoper239b374a39c8\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper239b374a39c8\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper239b374a39c8\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper239b374a39c8\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
