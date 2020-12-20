<?php

declare (strict_types=1);
namespace _PhpScoper611f49771945;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper611f49771945\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
