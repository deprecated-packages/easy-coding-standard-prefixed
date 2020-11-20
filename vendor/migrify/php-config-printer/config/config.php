<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9;

use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperb6d4bd368bd9\PhpParser\BuilderFactory;
use _PhpScoperb6d4bd368bd9\PhpParser\NodeFinder;
use _PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperb6d4bd368bd9\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperb6d4bd368bd9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperb6d4bd368bd9\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperb6d4bd368bd9\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperb6d4bd368bd9\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperb6d4bd368bd9\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperb6d4bd368bd9\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
