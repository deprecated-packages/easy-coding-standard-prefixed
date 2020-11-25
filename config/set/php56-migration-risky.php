<?php

declare (strict_types=1);
namespace _PhpScoper833c56a97273;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper833c56a97273\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper833c56a97273\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
