<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use function array_reverse;
use function in_array;
use const T_OPEN_TAG;
/**
 * @internal
 */
class ScopeHelper
{
    public static function isInSameScope(\PHP_CodeSniffer\Files\File $phpcsFile, int $firstPointer, int $secondPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $getScope = static function (int $pointer) use($tokens) : int {
            $scope = 0;
            foreach (\array_reverse($tokens[$pointer]['conditions'], \true) as $conditionPointer => $conditionTokenCode) {
                if (!\in_array($conditionTokenCode, \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                    continue;
                }
                $scope = $tokens[$conditionPointer]['level'] + 1;
                break;
            }
            return $scope;
        };
        return $getScope($firstPointer) === $getScope($secondPointer);
    }
    public static function getRootPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : int
    {
        $rootPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_OPEN_TAG, 0);
        $rootPointers = \array_reverse(self::getAllRootPointers($phpcsFile));
        foreach ($rootPointers as $currentRootPointer) {
            if ($currentRootPointer < $pointer) {
                $rootPointer = $currentRootPointer;
                break;
            }
        }
        return $rootPointer;
    }
    /**
     * @param File $phpcsFile
     * @return int[]
     */
    public static function getAllRootPointers(\PHP_CodeSniffer\Files\File $phpcsFile) : array
    {
        $lazyValue = static function () use($phpcsFile) : array {
            return \SlevomatCodingStandard\Helpers\TokenHelper::findNextAll($phpcsFile, \T_OPEN_TAG, 0);
        };
        return \SlevomatCodingStandard\Helpers\SniffLocalCache::getAndSetIfNotCached($phpcsFile, 'openTagPointers', $lazyValue);
    }
}
