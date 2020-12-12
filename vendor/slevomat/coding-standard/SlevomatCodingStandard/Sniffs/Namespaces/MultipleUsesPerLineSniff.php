<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use const _PhpScoper8a05d21c15c9\T_COMMA;
use const _PhpScoper8a05d21c15c9\T_SEMICOLON;
use const T_USE;
class MultipleUsesPerLineSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_MULTIPLE_USES_PER_LINE = 'MultipleUsesPerLine';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_USE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $usePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $usePointer) : void
    {
        if (\SlevomatCodingStandard\Helpers\UseStatementHelper::isAnonymousFunctionUse($phpcsFile, $usePointer) || \SlevomatCodingStandard\Helpers\UseStatementHelper::isTraitUse($phpcsFile, $usePointer)) {
            return;
        }
        $endPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $usePointer + 1);
        $commaPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_COMMA, $usePointer + 1, $endPointer);
        if ($commaPointer === null) {
            return;
        }
        $phpcsFile->addError('Multiple used types per use statement are forbidden.', $commaPointer, self::CODE_MULTIPLE_USES_PER_LINE);
    }
}
