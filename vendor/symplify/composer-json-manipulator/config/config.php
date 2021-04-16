<?php

declare (strict_types=1);
namespace _PhpScopereb9508917a55;

use _PhpScopereb9508917a55\Symfony\Component\DependencyInjection\ContainerInterface;
use _PhpScopereb9508917a55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
use Symplify\SmartFileSystem\SmartFileSystem;
use function _PhpScopereb9508917a55\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INLINE_SECTIONS, ['keywords']);
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ComposerJsonManipulator\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Bundle']);
    $services->set(SmartFileSystem::class);
    $services->set(PrivatesCaller::class);
    $services->set(ParameterProvider::class)->args([service(ContainerInterface::class)]);
};
