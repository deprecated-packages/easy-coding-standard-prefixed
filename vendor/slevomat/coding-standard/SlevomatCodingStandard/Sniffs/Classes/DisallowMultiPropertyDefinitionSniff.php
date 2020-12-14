<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\DocCommentHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function count;
use function sprintf;
use function trim;
use const T_AS;
use const _PhpScoper6224e3b16fcc\T_COMMA;
use const T_FUNCTION;
use const _PhpScoper6224e3b16fcc\T_OPEN_SHORT_ARRAY;
use const T_PRIVATE;
use const T_PROTECTED;
use const T_PUBLIC;
use const _PhpScoper6224e3b16fcc\T_SEMICOLON;
use const T_VAR;
use const T_VARIABLE;
class DisallowMultiPropertyDefinitionSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_DISALLOWED_MULTI_PROPERTY_DEFINITION = 'DisallowedMultiPropertyDefinition';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_VAR, \T_PUBLIC, \T_PROTECTED, \T_PRIVATE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $visibilityPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $visibilityPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $asPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $visibilityPointer - 1);
        if ($tokens[$asPointer]['code'] === \T_AS) {
            return;
        }
        $propertyPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_VARIABLE, \T_FUNCTION], $visibilityPointer + 1);
        if ($propertyPointer === null || $tokens[$propertyPointer]['code'] === \T_FUNCTION) {
            return;
        }
        $semicolonPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $propertyPointer + 1);
        $commaPointers = [];
        $nextPointer = $propertyPointer;
        do {
            $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_COMMA, \T_OPEN_SHORT_ARRAY], $nextPointer + 1, $semicolonPointer);
            if ($nextPointer === null) {
                break;
            }
            if ($tokens[$nextPointer]['code'] === \T_OPEN_SHORT_ARRAY) {
                $nextPointer = $tokens[$nextPointer]['bracket_closer'];
                continue;
            }
            $commaPointers[] = $nextPointer;
        } while (\true);
        if (\count($commaPointers) === 0) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Use of multi property definition is disallowed.', $visibilityPointer, self::CODE_DISALLOWED_MULTI_PROPERTY_DEFINITION);
        if (!$fix) {
            return;
        }
        $visibility = $tokens[$visibilityPointer]['content'];
        $pointerAfterVisibility = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $visibilityPointer + 1);
        $pointerBeforeSemicolon = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $semicolonPointer - 1);
        $indentation = \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $visibilityPointer);
        $nameTokenCodes = \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes();
        $typeHint = null;
        $typeHintStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, $nameTokenCodes, $visibilityPointer + 1, $propertyPointer);
        $typeHintEndPointer = null;
        $pointerAfterTypeHint = null;
        if ($typeHintStartPointer !== null) {
            $typeHintEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, $nameTokenCodes, $typeHintStartPointer + 1) - 1;
            $typeHint = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $typeHintStartPointer, $typeHintEndPointer);
            $pointerAfterTypeHint = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $typeHintEndPointer + 1);
        }
        $docCommentPointer = \SlevomatCodingStandard\Helpers\DocCommentHelper::findDocCommentOpenToken($phpcsFile, $propertyPointer);
        $docComment = $docCommentPointer !== null ? \trim(\SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $docCommentPointer, $tokens[$docCommentPointer]['comment_closer'])) : null;
        $data = [];
        foreach ($commaPointers as $commaPointer) {
            $data[$commaPointer] = ['pointerBeforeComma' => \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $commaPointer - 1), 'pointerAfterComma' => \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $commaPointer + 1)];
        }
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->addContent($visibilityPointer, ' ');
        for ($i = $visibilityPointer + 1; $i < $pointerAfterVisibility; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        if ($typeHint !== null) {
            $phpcsFile->fixer->addContent($typeHintEndPointer, ' ');
            for ($i = $typeHintEndPointer + 1; $i < $pointerAfterTypeHint; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
        }
        foreach ($commaPointers as $commaPointer) {
            for ($i = $data[$commaPointer]['pointerBeforeComma'] + 1; $i < $commaPointer; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            $phpcsFile->fixer->replaceToken($commaPointer, \sprintf(';%s%s%s%s%s ', $phpcsFile->eolChar, $docComment !== null ? \sprintf('%s%s%s', $indentation, $docComment, $phpcsFile->eolChar) : '', $indentation, $visibility, $typeHint !== null ? \sprintf(' %s', $typeHint) : ''));
            for ($i = $commaPointer + 1; $i < $data[$commaPointer]['pointerAfterComma']; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
        }
        for ($i = $pointerBeforeSemicolon + 1; $i < $semicolonPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
}
