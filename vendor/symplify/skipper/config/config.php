<?php

declare (strict_types=1);
namespace _PhpScoper3e7ab659bd82;

use _PhpScoper3e7ab659bd82\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker;
use Symplify\Skipper\ValueObject\Option;
use Symplify\SmartFileSystem\Normalizer\PathNormalizer;
return static function (\_PhpScoper3e7ab659bd82\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\Skipper\ValueObject\Option::SKIP, []);
    $parameters->set(\Symplify\Skipper\ValueObject\Option::ONLY, []);
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\Skipper\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle', __DIR__ . '/../src/HttpKernel', __DIR__ . '/../src/ValueObject']);
    $services->set(\Symplify\PackageBuilder\Reflection\ClassLikeExistenceChecker::class);
    $services->set(\Symplify\SmartFileSystem\Normalizer\PathNormalizer::class);
};
