<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperfacc742d2745\PhpParser\BuilderFactory;
use _PhpScoperfacc742d2745\PhpParser\NodeFinder;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfacc742d2745\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoperfacc742d2745\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoperfacc742d2745\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperfacc742d2745\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperfacc742d2745\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperfacc742d2745\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
