<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031;

use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScopere5e7dca8c031\PhpParser\BuilderFactory;
use _PhpScopere5e7dca8c031\PhpParser\NodeFinder;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopere5e7dca8c031\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScopere5e7dca8c031\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScopere5e7dca8c031\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopere5e7dca8c031\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopere5e7dca8c031\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopere5e7dca8c031\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
