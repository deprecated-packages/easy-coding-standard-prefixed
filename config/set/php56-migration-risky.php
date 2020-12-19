<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd1a5bf00e83e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
