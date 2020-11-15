<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121;

use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperd9c3b46af121\PhpParser\BuilderFactory;
use _PhpScoperd9c3b46af121\PhpParser\NodeFinder;
use _PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperd9c3b46af121\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperd9c3b46af121\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperd9c3b46af121\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperd9c3b46af121\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperd9c3b46af121\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperd9c3b46af121\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperd9c3b46af121\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
