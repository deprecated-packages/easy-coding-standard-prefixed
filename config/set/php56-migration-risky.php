<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper1e80a2e03314\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1e80a2e03314\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
