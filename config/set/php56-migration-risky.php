<?php

declare (strict_types=1);
namespace _PhpScoper68a3a2539032;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper68a3a2539032\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper68a3a2539032\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
