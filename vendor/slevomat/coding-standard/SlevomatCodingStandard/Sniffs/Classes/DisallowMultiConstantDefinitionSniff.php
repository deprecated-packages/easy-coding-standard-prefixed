<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\DocCommentHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function count;
use function in_array;
use function sprintf;
use function trim;
use const _PhpScopere015d8a3273c\T_COMMA;
use const T_CONST;
use const _PhpScopere015d8a3273c\T_OPEN_SHORT_ARRAY;
use const _PhpScopere015d8a3273c\T_SEMICOLON;
class DisallowMultiConstantDefinitionSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_DISALLOWED_MULTI_CONSTANT_DEFINITION = 'DisallowedMultiConstantDefinition';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_CONST];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $constantPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $constantPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $semicolonPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $constantPointer + 1);
        $commaPointers = [];
        $nextPointer = $constantPointer;
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
        $fix = $phpcsFile->addFixableError('Use of multi constant definition is disallowed.', $constantPointer, self::CODE_DISALLOWED_MULTI_CONSTANT_DEFINITION);
        if (!$fix) {
            return;
        }
        $possibleVisibilityPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $constantPointer - 1);
        $visibilityPointer = \in_array($tokens[$possibleVisibilityPointer]['code'], \PHP_CodeSniffer\Util\Tokens::$scopeModifiers, \true) ? $possibleVisibilityPointer : null;
        $visibility = $visibilityPointer !== null ? $tokens[$possibleVisibilityPointer]['content'] : null;
        $pointerAfterConst = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $constantPointer + 1);
        $pointerBeforeSemicolon = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $semicolonPointer - 1);
        $indentation = \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $visibilityPointer ?? $constantPointer);
        $docCommentPointer = \SlevomatCodingStandard\Helpers\DocCommentHelper::findDocCommentOpenToken($phpcsFile, $constantPointer);
        $docComment = $docCommentPointer !== null ? \trim(\SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $docCommentPointer, $tokens[$docCommentPointer]['comment_closer'])) : null;
        $data = [];
        foreach ($commaPointers as $commaPointer) {
            $data[$commaPointer] = ['pointerBeforeComma' => \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $commaPointer - 1), 'pointerAfterComma' => \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $commaPointer + 1)];
        }
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->addContent($constantPointer, ' ');
        for ($i = $constantPointer + 1; $i < $pointerAfterConst; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        foreach ($commaPointers as $commaPointer) {
            for ($i = $data[$commaPointer]['pointerBeforeComma'] + 1; $i < $commaPointer; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            $phpcsFile->fixer->replaceToken($commaPointer, \sprintf(';%s%s%s%sconst ', $phpcsFile->eolChar, $docComment !== null ? \sprintf('%s%s%s', $indentation, $docComment, $phpcsFile->eolChar) : '', $indentation, $visibility !== null ? \sprintf('%s ', $visibility) : ''));
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
