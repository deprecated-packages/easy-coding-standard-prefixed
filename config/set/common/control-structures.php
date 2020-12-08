<?php

declare (strict_types=1);
namespace _PhpScoper5ea36b274140;

use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff;
use PhpCsFixer\Fixer\Basic\Psr4Fixer;
use PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer;
use PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer;
use PhpCsFixer\Fixer\Operator\NewWithBracesFixer;
use PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff;
use SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff;
use SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff;
use SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff;
use _PhpScoper5ea36b274140\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoper5ea36b274140\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff::class);
    // breaks on PHP 8
    if (\PHP_VERSION_ID < 80000) {
        $services->set(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff::class);
    }
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\Psr4Fixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class)->call('configure', [['elements' => ['const', 'property']]]);
    $services->set(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class)->call('configure', [['singleLine' => \true]]);
    $services->set(\PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class)->call('configure', [['equal' => \false, 'identical' => \false, 'less_and_greater' => \false]]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::SKIP, [\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff::class . '.FoundInWhileCondition' => null]);
};
