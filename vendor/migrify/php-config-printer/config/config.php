<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc;

use _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoper2fe14d6302bc\PhpParser\BuilderFactory;
use _PhpScoper2fe14d6302bc\PhpParser\NodeFinder;
use _PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper2fe14d6302bc\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper2fe14d6302bc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoper2fe14d6302bc\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoper2fe14d6302bc\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper2fe14d6302bc\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper2fe14d6302bc\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper2fe14d6302bc\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
