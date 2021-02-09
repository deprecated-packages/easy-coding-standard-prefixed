<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper807f8e74693b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper807f8e74693b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHP_56_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
};
