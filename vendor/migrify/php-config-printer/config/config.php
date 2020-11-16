<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperedc2e0c967db\PhpParser\BuilderFactory;
use _PhpScoperedc2e0c967db\PhpParser\NodeFinder;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperedc2e0c967db\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperedc2e0c967db\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperedc2e0c967db\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperedc2e0c967db\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperedc2e0c967db\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperedc2e0c967db\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
