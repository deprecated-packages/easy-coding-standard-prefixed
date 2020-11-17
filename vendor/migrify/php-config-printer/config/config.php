<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8;

use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperad4b7e2c09d8\PhpParser\BuilderFactory;
use _PhpScoperad4b7e2c09d8\PhpParser\NodeFinder;
use _PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperad4b7e2c09d8\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperad4b7e2c09d8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperad4b7e2c09d8\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperad4b7e2c09d8\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperad4b7e2c09d8\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperad4b7e2c09d8\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperad4b7e2c09d8\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
