<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\PHP;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function strtolower;
use const T_OBJECT_OPERATOR;
use const _PhpScoper5cb8aea05893\T_OPEN_PARENTHESIS;
use const T_STRING;
class DisallowDirectMagicInvokeCallSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_DISALLOWED_DIRECT_MAGIC_INVOKE_CALL = 'DisallowDirectMagicInvokeCall';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_STRING];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $stringPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $stringPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $stringPointer + 1);
        if ($tokens[$parenthesisOpenerPointer]['code'] !== \T_OPEN_PARENTHESIS) {
            return;
        }
        if (\strtolower($tokens[$stringPointer]['content']) !== '__invoke') {
            return;
        }
        $objectOperator = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $stringPointer - 1);
        if ($tokens[$objectOperator]['code'] !== \T_OBJECT_OPERATOR) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Direct call of __invoke() is disallowed.', $stringPointer, self::CODE_DISALLOWED_DIRECT_MAGIC_INVOKE_CALL);
        if (!$fix) {
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        for ($i = $objectOperator; $i < $parenthesisOpenerPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
}
