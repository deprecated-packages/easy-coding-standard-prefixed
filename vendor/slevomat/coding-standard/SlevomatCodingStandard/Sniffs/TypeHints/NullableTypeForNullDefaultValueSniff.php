<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\TypeHints;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\SuppressHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_merge;
use function in_array;
use function sprintf;
use const _PhpScoper2fe14d6302bc\T_BITWISE_AND;
use const T_ELLIPSIS;
use const _PhpScoper2fe14d6302bc\T_EQUAL;
use const _PhpScoper2fe14d6302bc\T_INLINE_THEN;
use const _PhpScoper2fe14d6302bc\T_NULL;
use const _PhpScoper2fe14d6302bc\T_NULLABLE;
use const T_VARIABLE;
class NullableTypeForNullDefaultValueSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_NULLABILITY_SYMBOL_REQUIRED = 'NullabilitySymbolRequired';
    private const NAME = 'SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes;
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $functionPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $functionPointer) : void
    {
        if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $functionPointer, self::NAME)) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $startPointer = $tokens[$functionPointer]['parenthesis_opener'] + 1;
        $endPointer = $tokens[$functionPointer]['parenthesis_closer'];
        $typeHintTokenCodes = \SlevomatCodingStandard\Helpers\TokenHelper::getTypeHintTokenCodes();
        for ($i = $startPointer; $i < $endPointer; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            $parameterName = $tokens[$i]['content'];
            $afterVariablePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $i + 1);
            if ($tokens[$afterVariablePointer]['code'] !== \T_EQUAL) {
                continue;
            }
            $afterEqualsPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $afterVariablePointer + 1);
            if ($tokens[$afterEqualsPointer]['code'] !== \T_NULL) {
                continue;
            }
            $ignoreTokensToFindTypeHint = \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::$ineffectiveTokenCodes, [\T_BITWISE_AND, \T_ELLIPSIS]);
            $typeHintPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, $ignoreTokensToFindTypeHint, $i - 1, $startPointer);
            if ($typeHintPointer === null || !\in_array($tokens[$typeHintPointer]['code'], $typeHintTokenCodes, \true)) {
                continue;
            }
            $ignoreTokensToSkipTypeHint = \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::$ineffectiveTokenCodes, $typeHintTokenCodes);
            $beforeTypeHintPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, $ignoreTokensToSkipTypeHint, $typeHintPointer - 1, $startPointer);
            // PHPCS reports T_NULLABLE as T_INLINE_THEN in PHP 8
            if ($beforeTypeHintPointer !== null && \in_array($tokens[$beforeTypeHintPointer]['code'], [\T_NULLABLE, \T_INLINE_THEN], \true)) {
                continue;
            }
            $fix = $phpcsFile->addFixableError(\sprintf('Parameter %s has null default value, but is not marked as nullable.', $parameterName), $i, self::CODE_NULLABILITY_SYMBOL_REQUIRED);
            if (!$fix) {
                continue;
            }
            $firstTypehint = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $beforeTypeHintPointer === null ? $startPointer : $beforeTypeHintPointer + 1);
            $phpcsFile->fixer->beginChangeset();
            $phpcsFile->fixer->addContent($firstTypehint - 1, '?');
            $phpcsFile->fixer->endChangeset();
        }
    }
}
