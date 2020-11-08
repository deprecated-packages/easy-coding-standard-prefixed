<?php

declare (strict_types=1);
namespace _PhpScoperd79d87c3336e;

use PHP_CodeSniffer\Fixer;
use _PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd79d87c3336e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->autowire()->autoconfigure()->public();
    $services->load('Symplify\\EasyCodingStandard\\SniffRunner\\', __DIR__ . '/../src')->exclude([__DIR__ . '/../src/Exception', __DIR__ . '/../src/ValueObject']);
    $services->set(\PHP_CodeSniffer\Fixer::class);
};
