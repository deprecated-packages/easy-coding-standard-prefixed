<?php

declare (strict_types=1);
namespace _PhpScoperfabf55fef6b7;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfabf55fef6b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
