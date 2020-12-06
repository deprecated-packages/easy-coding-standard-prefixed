<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe;

use PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer;
use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use _PhpScoper3e8786a75afe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper3e8786a75afe\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
};
