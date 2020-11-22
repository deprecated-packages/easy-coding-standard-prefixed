<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1;

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer;
use PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer;
use SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff;
use SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff;
use SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff;
use SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff;
use SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff;
use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff;
use _PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer;
return static function (\_PhpScoper4cd05b62e9f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff::class);
    $services->set(\Symplify\CodingStandard\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class);
    $services->set(\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class)->call('configure', [['syntax' => 'short']]);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff::class);
    $services->set(\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class);
};
