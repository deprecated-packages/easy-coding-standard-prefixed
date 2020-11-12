<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6;

use _PhpScoper7cef7256eba6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
use Symplify\Skipper\ValueObject\Option;
return static function (\_PhpScoper7cef7256eba6\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\Skipper\ValueObject\Option::SKIP, []);
    $parameters->set(\Symplify\Skipper\ValueObject\Option::ONLY, []);
    // @deprecated - merge with "SKIP" and remove before release
    $parameters->set(\Symplify\Skipper\ValueObject\Option::EXCLUDE_PATHS, []);
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\Skipper\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
};
