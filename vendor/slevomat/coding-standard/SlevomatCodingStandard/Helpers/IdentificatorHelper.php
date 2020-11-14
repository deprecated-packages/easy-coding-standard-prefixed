<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use function array_key_exists;
use function array_merge;
use function in_array;
use const _PhpScoper4936962185e7\T_CLOSE_CURLY_BRACKET;
use const _PhpScoper4936962185e7\T_CLOSE_SQUARE_BRACKET;
use const _PhpScoper4936962185e7\T_DOLLAR;
use const T_DOUBLE_COLON;
use const T_OBJECT_OPERATOR;
use const _PhpScoper4936962185e7\T_OPEN_CURLY_BRACKET;
use const _PhpScoper4936962185e7\T_OPEN_SQUARE_BRACKET;
use const _PhpScoper4936962185e7\T_PARENT;
use const _PhpScoper4936962185e7\T_SELF;
use const T_STATIC;
use const T_VARIABLE;
class IdentificatorHelper
{
    public static function getContent(\PHP_CodeSniffer\Files\File $phpcsFile, int $startPointer, int $endPointer) : string
    {
        $tokens = $phpcsFile->getTokens();
        $variableContent = '';
        for ($i = $startPointer; $i <= $endPointer; $i++) {
            if (\in_array($tokens[$i]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$ineffectiveTokenCodes, \true)) {
                continue;
            }
            $variableContent .= $tokens[$i]['content'];
        }
        return $variableContent;
    }
    public static function findStartPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $endPointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        if (\in_array($tokens[$endPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes(), \true)) {
            /** @var int $previousPointer */
            $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $endPointer - 1);
            if (\in_array($tokens[$previousPointer]['code'], [\T_OBJECT_OPERATOR, \T_DOUBLE_COLON], \true)) {
                return self::getStartPointerBeforeOperator($phpcsFile, $previousPointer);
            }
            return $endPointer;
        }
        if (\in_array($tokens[$endPointer]['code'], [\T_CLOSE_CURLY_BRACKET, \T_CLOSE_SQUARE_BRACKET], \true)) {
            return self::getStartPointerBeforeVariablePart($phpcsFile, $tokens[$endPointer]['bracket_opener']);
        }
        if ($tokens[$endPointer]['code'] === \T_VARIABLE) {
            return self::getStartPointerBeforeVariablePart($phpcsFile, $endPointer);
        }
        return null;
    }
    public static function findEndPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $startPointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        $nameTokenCodes = \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes();
        if (\in_array($tokens[$startPointer]['code'], $nameTokenCodes, \true)) {
            $startPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, $nameTokenCodes, $startPointer + 1) - 1;
        } elseif ($tokens[$startPointer]['code'] === \T_DOLLAR) {
            $startPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $startPointer + 1);
        }
        /** @var int $nextPointer */
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $startPointer + 1);
        if (\in_array($tokens[$startPointer]['code'], \array_merge([\T_SELF, \T_STATIC, \T_PARENT], $nameTokenCodes), \true) && $tokens[$nextPointer]['code'] === \T_DOUBLE_COLON) {
            return self::getEndPointerAfterOperator($phpcsFile, $nextPointer);
        }
        if ($tokens[$startPointer]['code'] === \T_VARIABLE) {
            if (\in_array($tokens[$nextPointer]['code'], [\T_DOUBLE_COLON, \T_OBJECT_OPERATOR], \true)) {
                return self::getEndPointerAfterOperator($phpcsFile, $nextPointer);
            }
            if ($tokens[$nextPointer]['code'] === \T_OPEN_SQUARE_BRACKET) {
                return self::getEndPointerAfterVariablePart($phpcsFile, $startPointer);
            }
            return $startPointer;
        }
        return null;
    }
    private static function getStartPointerBeforeOperator(\PHP_CodeSniffer\Files\File $phpcsFile, int $operatorPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        $nameTokenCodes = \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes();
        /** @var int $previousPointer */
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $operatorPointer - 1);
        if (\in_array($tokens[$previousPointer]['code'], $nameTokenCodes, \true)) {
            $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, $nameTokenCodes, $previousPointer - 1) + 1;
        }
        if ($tokens[$operatorPointer]['code'] === \T_DOUBLE_COLON && \in_array($tokens[$previousPointer]['code'], \array_merge([\T_SELF, \T_STATIC, \T_PARENT], $nameTokenCodes), \true)) {
            return $previousPointer;
        }
        if (\in_array($tokens[$previousPointer]['code'], $nameTokenCodes, \true)) {
            /** @var int $possibleOperatorPointer */
            $possibleOperatorPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousPointer - 1);
            if ($tokens[$possibleOperatorPointer]['code'] === \T_OBJECT_OPERATOR) {
                return self::getStartPointerBeforeOperator($phpcsFile, $possibleOperatorPointer);
            }
        }
        if (\in_array($tokens[$previousPointer]['code'], [\T_CLOSE_CURLY_BRACKET, \T_CLOSE_SQUARE_BRACKET], \true)) {
            return self::getStartPointerBeforeVariablePart($phpcsFile, $tokens[$previousPointer]['bracket_opener']);
        }
        return self::getStartPointerBeforeVariablePart($phpcsFile, $previousPointer);
    }
    private static function getStartPointerBeforeVariablePart(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePartPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        /** @var int $previousPointer */
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePartPointer - 1);
        if ($tokens[$previousPointer]['code'] === \T_DOLLAR) {
            /** @var int $previousPointer */
            $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousPointer - 1);
        }
        if (\in_array($tokens[$previousPointer]['code'], [\T_OBJECT_OPERATOR, \T_DOUBLE_COLON], \true)) {
            return self::getStartPointerBeforeOperator($phpcsFile, $previousPointer);
        }
        if ($tokens[$previousPointer]['code'] === \T_CLOSE_SQUARE_BRACKET) {
            return self::getStartPointerBeforeVariablePart($phpcsFile, $tokens[$previousPointer]['bracket_opener']);
        }
        if ($tokens[$previousPointer]['code'] === \T_CLOSE_CURLY_BRACKET && !\array_key_exists('scope_condition', $tokens[$previousPointer])) {
            return self::getStartPointerBeforeVariablePart($phpcsFile, $tokens[$previousPointer]['bracket_opener']);
        }
        if (\in_array($tokens[$previousPointer]['code'], \array_merge([\T_VARIABLE], \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes()), \true)) {
            return self::getStartPointerBeforeVariablePart($phpcsFile, $previousPointer);
        }
        return $variablePartPointer;
    }
    private static function getEndPointerAfterOperator(\PHP_CodeSniffer\Files\File $phpcsFile, int $operatorPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        /** @var int $nextPointer */
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $operatorPointer + 1);
        if ($tokens[$nextPointer]['code'] === \T_DOLLAR) {
            /** @var int $nextPointer */
            $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $nextPointer + 1);
        }
        if ($tokens[$nextPointer]['code'] === \T_OPEN_CURLY_BRACKET) {
            return self::getEndPointerAfterVariablePart($phpcsFile, $tokens[$nextPointer]['bracket_closer']);
        }
        return self::getEndPointerAfterVariablePart($phpcsFile, $nextPointer);
    }
    private static function getEndPointerAfterVariablePart(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePartPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        /** @var int $nextPointer */
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $variablePartPointer + 1);
        if (\in_array($tokens[$nextPointer]['code'], [\T_OBJECT_OPERATOR, \T_DOUBLE_COLON], \true)) {
            return self::getEndPointerAfterOperator($phpcsFile, $nextPointer);
        }
        if ($tokens[$nextPointer]['code'] === \T_OPEN_SQUARE_BRACKET) {
            return self::getEndPointerAfterVariablePart($phpcsFile, $tokens[$nextPointer]['bracket_closer']);
        }
        return $variablePartPointer;
    }
}
