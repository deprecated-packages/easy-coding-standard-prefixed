<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScopera4be459e5e3d\PhpParser\BuilderFactory;
use _PhpScopera4be459e5e3d\PhpParser\NodeFinder;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera4be459e5e3d\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScopera4be459e5e3d\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScopera4be459e5e3d\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScopera4be459e5e3d\PhpParser\NodeFinder::class);
    $services->set(\_PhpScopera4be459e5e3d\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScopera4be459e5e3d\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
