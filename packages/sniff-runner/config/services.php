<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0;

use PHP_CodeSniffer\Fixer;
use _PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\SniffRunner\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/ValueObject']);
    $services->set(\PHP_CodeSniffer\Fixer::class);
};
