<?php

declare (strict_types=1);
namespace _PhpScoper15c5423f4731;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper15c5423f4731\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper15c5423f4731\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
