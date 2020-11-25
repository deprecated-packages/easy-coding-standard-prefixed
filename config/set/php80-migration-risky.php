<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer;
use PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer;
use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer;
use PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer;
use PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer;
use PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer;
use PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class)->call('configure', [['sets' => ['@all']]]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class)->call('configure', [['use_escape_sequences_in_strings' => \true]]);
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class)->call('configure', [['replacements' => ['mt_rand' => 'random_int', 'rand' => 'random_int']]]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class);
};