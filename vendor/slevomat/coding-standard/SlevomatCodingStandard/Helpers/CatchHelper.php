<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use function array_merge;
use const _PhpScoper269dc521b0fa\T_BITWISE_OR;
class CatchHelper
{
    /**
     * @param File $phpcsFile
     * @param array<string, array<int, int|string>|int|string> $catchToken
     * @return string[]
     */
    public static function findCatchedTypesInCatch(\PHP_CodeSniffer\Files\File $phpcsFile, array $catchToken) : array
    {
        /** @var int $catchParenthesisOpenerPointer */
        $catchParenthesisOpenerPointer = $catchToken['parenthesis_opener'];
        /** @var int $catchParenthesisCloserPointer */
        $catchParenthesisCloserPointer = $catchToken['parenthesis_closer'];
        $nameTokenCodes = \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes();
        $nameEndPointer = $catchParenthesisOpenerPointer;
        $tokens = $phpcsFile->getTokens();
        $catchedTypes = [];
        do {
            $nameStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \array_merge([\T_BITWISE_OR], $nameTokenCodes), $nameEndPointer + 1, $catchParenthesisCloserPointer);
            if ($nameStartPointer === null) {
                break;
            }
            if ($tokens[$nameStartPointer]['code'] === \T_BITWISE_OR) {
                /** @var int $nameStartPointer */
                $nameStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $nameStartPointer + 1, $catchParenthesisCloserPointer);
            }
            $pointerAfterNameEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, $nameTokenCodes, $nameStartPointer + 1);
            $nameEndPointer = $pointerAfterNameEndPointer === null ? $nameStartPointer : $pointerAfterNameEndPointer - 1;
            $catchedTypes[] = \SlevomatCodingStandard\Helpers\NamespaceHelper::resolveClassName($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $nameStartPointer, $nameEndPointer), $catchParenthesisOpenerPointer);
        } while (\true);
        return $catchedTypes;
    }
}
