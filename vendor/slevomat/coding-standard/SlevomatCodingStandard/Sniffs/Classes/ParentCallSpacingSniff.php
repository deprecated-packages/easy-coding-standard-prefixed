<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Sniffs\ControlStructures\AbstractControlStructureSpacing;
use function array_key_exists;
use function array_merge;
use function in_array;
use const T_COALESCE;
use const _PhpScoper64a921a5401b\T_COLON;
use const _PhpScoper64a921a5401b\T_INLINE_ELSE;
use const _PhpScoper64a921a5401b\T_INLINE_THEN;
use const _PhpScoper64a921a5401b\T_OPEN_SHORT_ARRAY;
use const _PhpScoper64a921a5401b\T_PARENT;
use const T_RETURN;
use const _PhpScoper64a921a5401b\T_STRING_CONCAT;
use const T_YIELD;
use const T_YIELD_FROM;
class ParentCallSpacingSniff extends \SlevomatCodingStandard\Sniffs\ControlStructures\AbstractControlStructureSpacing
{
    /** @var int */
    public $linesCountBeforeParentCall = 1;
    /** @var int */
    public $linesCountBeforeFirstParentCall = 0;
    /** @var int */
    public $linesCountAfterParentCall = 1;
    /** @var int */
    public $linesCountAfterLastParentCall = 0;
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $parentPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $parentPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        if (\array_key_exists('nested_parenthesis', $tokens[$parentPointer])) {
            return;
        }
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parentPointer - 1);
        if (\in_array($tokens[$previousPointer]['code'], \PHP_CodeSniffer\Util\Tokens::$castTokens, \true)) {
            $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousPointer - 1);
        }
        $tokensToIgnore = \array_merge(\PHP_CodeSniffer\Util\Tokens::$assignmentTokens, \PHP_CodeSniffer\Util\Tokens::$equalityTokens, \PHP_CodeSniffer\Util\Tokens::$booleanOperators, [\T_RETURN, \T_YIELD, \T_YIELD_FROM, \T_OPEN_SHORT_ARRAY, \T_COLON, \T_STRING_CONCAT, \T_INLINE_THEN, \T_INLINE_ELSE, \T_COALESCE]);
        if (\in_array($tokens[$previousPointer]['code'], $tokensToIgnore, \true)) {
            return;
        }
        parent::process($phpcsFile, $parentPointer);
    }
    /**
     * @return string[]
     */
    protected function getSupportedTokens() : array
    {
        return [\T_PARENT];
    }
    /**
     * @return string[]
     */
    protected function getTokensToCheck() : array
    {
        return ['T_PARENT'];
    }
    protected function getLinesCountBefore() : int
    {
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeParentCall);
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
     * @param File $phpcsFile
     * @param int $parentPointer
     * @return int
     */
    protected function getLinesCountBeforeFirst(\PHP_CodeSniffer\Files\File $phpcsFile, int $parentPointer) : int
    {
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeFirstParentCall);
    }
    protected function getLinesCountAfter() : int
    {
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountAfterParentCall);
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
     * @param File $phpcsFile
     * @param int $parentPointer
     * @param int $parentEndPointer
     * @return int
     */
    protected function getLinesCountAfterLast(\PHP_CodeSniffer\Files\File $phpcsFile, int $parentPointer, int $parentEndPointer) : int
    {
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountAfterLastParentCall);
    }
}
