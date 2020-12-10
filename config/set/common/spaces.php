<?php

declare (strict_types=1);
namespace _PhpScoper4edd80b4ab80;

use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer;
use PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer;
use PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer;
use PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer;
use PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer;
use SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff;
use SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff;
use SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff;
use _PhpScoper4edd80b4ab80\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4edd80b4ab80\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class);
    // breaks on PHP 8
    if (\PHP_VERSION_ID < 80000) {
        $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class)->call('configure', [['elements' => ['const', 'property', 'method']]]);
    }
    $services->set(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class)->call('configure', [['spacing' => 'one']]);
    $services->set(\PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class)->property('ignoreBlankLines', \false);
    $services->set(\PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class)->call('configure', [['align_double_arrow' => \false, 'align_equals' => \false]]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff::class)->property('linesCountAfterLastUse', 1)->property('linesCountAfterLastUseWhenLastInClass', 0)->property('linesCountBeforeFirstUse', 0)->property('linesCountBetweenUses', 0);
};
