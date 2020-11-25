<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa;

use _PhpScoper2f75f00bf6fa\PhpParser\BuilderFactory;
use _PhpScoper2f75f00bf6fa\PhpParser\NodeFinder;
use _PhpScoper2f75f00bf6fa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper2f75f00bf6fa\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PhpConfigPrinter\ValueObject\Option;
return static function (\_PhpScoper2f75f00bf6fa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, 'Symplify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\Symplify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, 'Symplify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper2f75f00bf6fa\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper2f75f00bf6fa\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper2f75f00bf6fa\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
