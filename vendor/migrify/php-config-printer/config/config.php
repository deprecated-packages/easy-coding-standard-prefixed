<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperc753ccca5a0c\PhpParser\BuilderFactory;
use _PhpScoperc753ccca5a0c\PhpParser\NodeFinder;
use _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc753ccca5a0c\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperc753ccca5a0c\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperc753ccca5a0c\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperc753ccca5a0c\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperc753ccca5a0c\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperc753ccca5a0c\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
