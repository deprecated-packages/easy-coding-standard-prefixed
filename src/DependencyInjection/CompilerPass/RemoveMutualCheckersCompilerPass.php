<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\CompilerPass;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowShortArraySyntaxSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowSpaceIndentSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\NamespaceDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\UseDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\LowercaseClassKeywordsSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\DoubleQuoteUsageSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ArrayNotation\TrailingCommaInMultilineArrayFixer;
use PhpCsFixer\Fixer\Basic\BracesFixer;
use PhpCsFixer\Fixer\Basic\Psr4Fixer;
use PhpCsFixer\Fixer\Casing\ConstantCaseFixer;
use PhpCsFixer\Fixer\Casing\LowercaseConstantsFixer;
use PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use PhpCsFixer\Fixer\ClassNotation\MethodSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\Comment\HashToSlashCommentFixer;
use PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer;
use PhpCsFixer\Fixer\ControlStructure\IncludeFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer;
use PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer;
use PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer;
use PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer;
use PhpCsFixer\Fixer\Operator\IncrementStyleFixer;
use PhpCsFixer\Fixer\Operator\PreIncrementFixer;
use PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer;
use PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use PhpCsFixer\Fixer\Whitespace\LineEndingFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraConsecutiveBlankLinesFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff;
use SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff;
use SlevomatCodingStandard\Sniffs\Commenting\ForbiddenAnnotationsSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff as SlevomatAssignmentInConditionSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff;
use SlevomatCodingStandard\Sniffs\Files\TypeNameMatchesFileNameSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\DisallowGroupUseSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff;
use SlevomatCodingStandard\Sniffs\Operators\DisallowEqualOperatorsSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff;
use _PhpScoper11a6395266c4\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper11a6395266c4\Symfony\Component\DependencyInjection\ContainerBuilder;
final class RemoveMutualCheckersCompilerPass implements \_PhpScoper11a6395266c4\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * List of checkers with the same functionality.
     * If found, only the first one is used.
     *
     * @var string[][]
     */
    private const DUPLICATED_CHECKER_GROUPS = [
        [\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class],
        [\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowSpaceIndentSniff::class],
        [\PhpCsFixer\Fixer\Strict\StrictComparisonFixer::class, \SlevomatCodingStandard\Sniffs\Operators\DisallowEqualOperatorsSniff::class],
        [\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class, \SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff::class],
        [\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowShortArraySyntaxSniff::class],
        [\PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class],
        [\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class, \PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\LowercaseClassKeywordsSniff::class],
        [\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class],
        [\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class, \PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\UseDeclarationSniff::class],
        [\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class, \SlevomatCodingStandard\Sniffs\Namespaces\DisallowGroupUseSniff::class],
        [\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class, \SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff::class],
        [\PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer::class, \SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff::class],
        [\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, \SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff::class],
        [\PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class, \SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff::class],
        [\PhpCsFixer\Fixer\ArrayNotation\TrailingCommaInMultilineArrayFixer::class, \SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff::class],
        [\PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer::class, \SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff::class],
        [\PhpCsFixer\Fixer\Basic\Psr4Fixer::class, \SlevomatCodingStandard\Sniffs\Files\TypeNameMatchesFileNameSniff::class],
        [\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class, \SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff::class],
        [\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class, \SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff::class],
        [\PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer::class, \PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class],
        [\PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer::class, \SlevomatCodingStandard\Sniffs\Commenting\ForbiddenAnnotationsSniff::class],
        [\PhpCsFixer\Fixer\Whitespace\NoExtraConsecutiveBlankLinesFixer::class, \PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class],
        [\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, \PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class],
        [\PhpCsFixer\Fixer\ControlStructure\IncludeFixer::class, \PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class],
        [\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff::class, \SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff::class],
        [\PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class, \PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\DoubleQuoteUsageSniff::class],
        // PSR2
        [\PhpCsFixer\Fixer\Basic\BracesFixer::class, \PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class],
        [\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class, \PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\NamespaceDeclarationSniff::class],
        [\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class],
        [\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class],
        [\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class],
        [\PhpCsFixer\Fixer\Casing\LowercaseConstantsFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class],
        [\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class],
        [\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class, \PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class],
        [\PhpCsFixer\Fixer\Basic\BracesFixer::class, \PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class],
        [\PhpCsFixer\Fixer\Basic\BracesFixer::class, \PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class],
        [\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, \PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff::class],
        [\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class, \PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class],
        [\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, \PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class],
        // Aliased deprecated fixers
        [\PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class, \PhpCsFixer\Fixer\Whitespace\NoExtraConsecutiveBlankLinesFixer::class],
        [\PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer::class, \PhpCsFixer\Fixer\ClassNotation\MethodSeparationFixer::class],
        [\PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class, \PhpCsFixer\Fixer\Operator\PreIncrementFixer::class],
        [\PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class, \PhpCsFixer\Fixer\Comment\HashToSlashCommentFixer::class],
    ];
    public function process(\_PhpScoper11a6395266c4\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $checkersToRemove = $this->resolveCheckersToRemove($containerBuilder->getServiceIds());
        $definitions = $containerBuilder->getDefinitions();
        foreach ($definitions as $id => $definition) {
            if (\in_array($definition->getClass(), $checkersToRemove, \true)) {
                $containerBuilder->removeDefinition($id);
            }
        }
    }
    /**
     * @param string[] $checkers
     * @return string[]
     */
    private function resolveCheckersToRemove(array $checkers) : array
    {
        $checkers = (array) \array_flip($checkers);
        $checkersToRemove = [];
        foreach (self::DUPLICATED_CHECKER_GROUPS as $matchingCheckerGroup) {
            if (!$this->isMatch($checkers, $matchingCheckerGroup)) {
                continue;
            }
            \array_shift($matchingCheckerGroup);
            foreach ($matchingCheckerGroup as $checkerToRemove) {
                $checkersToRemove[] = $checkerToRemove;
            }
        }
        return $checkersToRemove;
    }
    /**
     * @param string[] $checkers
     * @param string[] $matchingCheckerGroup
     */
    private function isMatch(array $checkers, array $matchingCheckerGroup) : bool
    {
        $matchingCheckerGroupKeys = \array_flip($matchingCheckerGroup);
        return \count(\array_intersect_key($matchingCheckerGroupKeys, $checkers)) === \count($matchingCheckerGroup);
    }
}
