<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Exceptions;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\CatchHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function in_array;
use const T_CATCH;
class DeadCatchSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_CATCH_AFTER_THROWABLE_CATCH = 'CatchAfterThrowableCatch';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_CATCH];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $catchPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $catchPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $catchToken = $tokens[$catchPointer];
        $catchedTypes = \SlevomatCodingStandard\Helpers\CatchHelper::findCatchedTypesInCatch($phpcsFile, $catchToken);
        if (!\in_array('\\Throwable', $catchedTypes, \true)) {
            return;
        }
        $nextCatchPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $catchToken['scope_closer'] + 1);
        while ($nextCatchPointer !== null) {
            $nextCatchToken = $tokens[$nextCatchPointer];
            if ($nextCatchToken['code'] !== \T_CATCH) {
                break;
            }
            $phpcsFile->addError('Unreachable catch block.', $nextCatchPointer, self::CODE_CATCH_AFTER_THROWABLE_CATCH);
            $nextCatchPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $nextCatchToken['scope_closer'] + 1);
        }
    }
}
