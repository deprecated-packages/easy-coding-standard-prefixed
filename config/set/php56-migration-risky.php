<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper21c6ce8bfe5d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
