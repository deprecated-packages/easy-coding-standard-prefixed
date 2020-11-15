<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b;

use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoper70072c07b02b\PhpParser\BuilderFactory;
use _PhpScoper70072c07b02b\PhpParser\NodeFinder;
use _PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper70072c07b02b\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper70072c07b02b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoper70072c07b02b\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoper70072c07b02b\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper70072c07b02b\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper70072c07b02b\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper70072c07b02b\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
