<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05;

use _PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoper5a9febfbbe05\PhpParser\BuilderFactory;
use _PhpScoper5a9febfbbe05\PhpParser\NodeFinder;
use _PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper5a9febfbbe05\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoper5a9febfbbe05\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoper5a9febfbbe05\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper5a9febfbbe05\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper5a9febfbbe05\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper5a9febfbbe05\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
