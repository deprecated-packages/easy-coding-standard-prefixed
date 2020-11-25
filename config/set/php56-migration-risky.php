<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper418afc2f157c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper418afc2f157c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
