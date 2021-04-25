<?php

declare (strict_types=1);
namespace _PhpScoper4fedb9aa1e5f;

use PHP_CodeSniffer\Fixer;
use _PhpScoper4fedb9aa1e5f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\SniffRunner\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/ValueObject']);
    $services->set(Fixer::class);
};
