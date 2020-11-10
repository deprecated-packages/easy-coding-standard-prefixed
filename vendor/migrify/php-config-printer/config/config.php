<?php

declare (strict_types=1);
namespace _PhpScoper470d6df94ac0;

use _PhpScoper470d6df94ac0\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoper470d6df94ac0\PhpParser\BuilderFactory;
use _PhpScoper470d6df94ac0\PhpParser\NodeFinder;
use _PhpScoper470d6df94ac0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper470d6df94ac0\Symfony\Component\Yaml\Parser;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
return static function (\_PhpScoper470d6df94ac0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\_PhpScoper470d6df94ac0\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME, '_PhpScoper470d6df94ac0\\Migrify\\SymfonyPhpConfig\\inline_value_object');
    $parameters->set(\_PhpScoper470d6df94ac0\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME, '_PhpScoper470d6df94ac0\\Migrify\\SymfonyPhpConfig\\inline_value_objects');
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Migrify\\PhpConfigPrinter\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/Dummy', __DIR__ . '/../src/Bundle']);
    $services->set(\_PhpScoper470d6df94ac0\PhpParser\NodeFinder::class);
    $services->set(\_PhpScoper470d6df94ac0\Symfony\Component\Yaml\Parser::class);
    $services->set(\_PhpScoper470d6df94ac0\PhpParser\BuilderFactory::class);
    $services->set(\Symplify\PackageBuilder\Parameter\ParameterProvider::class);
};
