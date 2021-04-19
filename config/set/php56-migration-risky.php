<?php

declare (strict_types=1);
namespace _PhpScoper1c0f546920a5;

use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use _PhpScoper1c0f546920a5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHP_56_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(PowToExponentiationFixer::class);
};
