<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use _PhpScoperaac5f7c652e4\PhpParser\BuilderFactory;
use _PhpScoperaac5f7c652e4\PhpParser\NodeFinder;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperaac5f7c652e4\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PhpConfigPrinter\ValueObject\Option;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, 'Symplify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\Symplify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, 'Symplify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoperaac5f7c652e4\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoperaac5f7c652e4\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoperaac5f7c652e4\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
