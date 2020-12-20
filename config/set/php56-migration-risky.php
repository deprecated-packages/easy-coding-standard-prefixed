<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper57210e33e43a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper57210e33e43a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
