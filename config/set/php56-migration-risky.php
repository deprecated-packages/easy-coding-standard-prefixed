<?php

declare (strict_types=1);
namespace _PhpScoper79449c4e744b;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper79449c4e744b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
