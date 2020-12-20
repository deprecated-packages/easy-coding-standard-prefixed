<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Functions;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_merge;
use function preg_replace;
use function rtrim;
use function sprintf;
use function trim;
use const T_FUNCTION;
use const _PhpScopera51a90153f58\T_OPEN_PARENTHESIS;
use const _PhpScopera51a90153f58\T_PARENT;
use const _PhpScopera51a90153f58\T_SELF;
use const T_STATIC;
abstract class AbstractLineCall implements \PHP_CodeSniffer\Sniffs\Sniff
{
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::getOnlyNameTokenCodes(), [\T_SELF, \T_STATIC, \T_PARENT]);
    }
    protected function isCall(\PHP_CodeSniffer\Files\File $phpcsFile, int $stringPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $stringPointer + 1);
        if ($tokens[$nextPointer]['code'] !== \T_OPEN_PARENTHESIS) {
            return \false;
        }
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $stringPointer - 1);
        return $tokens[$previousPointer]['code'] !== \T_FUNCTION;
    }
    protected function getLineStart(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : string
    {
        $firstPointerOnLine = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnLine($phpcsFile, $pointer);
        return \SlevomatCodingStandard\Helpers\IndentationHelper::convertTabsToSpaces($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $firstPointerOnLine, $pointer));
    }
    protected function getCall(\PHP_CodeSniffer\Files\File $phpcsFile, int $parenthesisOpenerPointer, int $parenthesisCloserPointer) : string
    {
        $call = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $parenthesisOpenerPointer + 1, $parenthesisCloserPointer - 1);
        $call = \preg_replace(\sprintf('~%s[ \\t]*~', $phpcsFile->eolChar), ' ', $call);
        $call = \preg_replace('~([({[])\\s+~', '$1', $call);
        $call = \preg_replace('~\\s+([)}\\]])~', '$1', $call);
        $call = \preg_replace('~,\\s*\\)~', ')', $call);
        $call = \preg_replace('~,\\s*$~', '', $call);
        return \trim($call);
    }
    protected function getLineEnd(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : string
    {
        $firstPointerOnNextLine = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnNextLine($phpcsFile, $pointer);
        return \rtrim(\SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $pointer, $firstPointerOnNextLine - 1));
    }
}
