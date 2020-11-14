<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperddde3ba4aebc\PhpParser\BuilderFactory;
use _PhpScoperddde3ba4aebc\PhpParser\NodeFinder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperddde3ba4aebc\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperddde3ba4aebc\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperddde3ba4aebc\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperddde3ba4aebc\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperddde3ba4aebc\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperddde3ba4aebc\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
