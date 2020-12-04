<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73;

use PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class)->call('configure', [['elements' => ['const', 'method', 'property']]]);
    $services->set(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
};
