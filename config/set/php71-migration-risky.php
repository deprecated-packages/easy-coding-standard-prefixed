<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552;

use PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer;
use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer;
use PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer;
use PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf361a7d70552\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHP_71_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class)->call('configure', [['use_escape_sequences_in_strings' => \true]]);
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer::class)->call('configure', [['replacements' => ['mt_rand' => 'random_int', 'rand' => 'random_int']]]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
};
