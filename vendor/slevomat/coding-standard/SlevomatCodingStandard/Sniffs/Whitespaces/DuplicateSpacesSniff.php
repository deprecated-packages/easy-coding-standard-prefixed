<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Whitespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\ParameterHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function in_array;
use function preg_match_all;
use function preg_replace;
use function sprintf;
use function str_repeat;
use function str_replace;
use function strlen;
use const PREG_OFFSET_CAPTURE;
use const _PhpScoperb383f16e851e\T_DOC_COMMENT_CLOSE_TAG;
use const _PhpScoperb383f16e851e\T_DOC_COMMENT_OPEN_TAG;
use const _PhpScoperb383f16e851e\T_DOC_COMMENT_STAR;
use const _PhpScoperb383f16e851e\T_DOC_COMMENT_STRING;
use const _PhpScoperb383f16e851e\T_DOC_COMMENT_TAG;
use const _PhpScoperb383f16e851e\T_DOC_COMMENT_WHITESPACE;
use const T_VARIABLE;
use const T_WHITESPACE;
class DuplicateSpacesSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_DUPLICATE_SPACES = 'DuplicateSpaces';
    /** @var bool */
    public $ignoreSpacesBeforeAssignment = \false;
    /** @var bool */
    public $ignoreSpacesInAnnotation = \false;
    /** @var bool */
    public $ignoreSpacesInComment = \false;
    /** @var bool */
    public $ignoreSpacesInParameters = \false;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_WHITESPACE, \T_DOC_COMMENT_WHITESPACE, \T_DOC_COMMENT_STRING];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $whitespacePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $whitespacePointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$whitespacePointer]['column'] === 1) {
            return;
        }
        $content = $tokens[$whitespacePointer]['content'];
        if ($content === $phpcsFile->eolChar) {
            return;
        }
        if ($tokens[$whitespacePointer]['code'] === \T_WHITESPACE) {
            if ($this->ignoreSpacesBeforeAssignment) {
                $pointerAfter = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $whitespacePointer + 1);
                if ($pointerAfter !== null && \in_array($tokens[$pointerAfter]['code'], \PHP_CodeSniffer\Util\Tokens::$assignmentTokens, \true)) {
                    return;
                }
            }
            if ($this->ignoreSpacesInParameters) {
                $pointerAfter = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $whitespacePointer + 1);
                if ($pointerAfter !== null && $tokens[$pointerAfter]['code'] === \T_VARIABLE && \SlevomatCodingStandard\Helpers\ParameterHelper::isParameter($phpcsFile, $pointerAfter)) {
                    return;
                }
            }
        } else {
            if ($this->ignoreSpacesInComment) {
                return;
            }
            if ($tokens[$whitespacePointer - 1]['code'] === \T_DOC_COMMENT_STAR && $tokens[$whitespacePointer + 1]['code'] === \T_DOC_COMMENT_STRING) {
                return;
            }
            if ($this->ignoreSpacesInAnnotation) {
                $pointerBefore = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, [\T_DOC_COMMENT_OPEN_TAG, \T_DOC_COMMENT_TAG], $whitespacePointer - 1);
                if ($pointerBefore !== null && $tokens[$pointerBefore]['code'] === \T_DOC_COMMENT_TAG && $tokens[$whitespacePointer + 1]['code'] !== \T_DOC_COMMENT_CLOSE_TAG) {
                    return;
                }
            }
        }
        $matchResult = \preg_match_all('~ {2,}~', $content, $matches, \PREG_OFFSET_CAPTURE);
        if ($matchResult === \false || $matchResult === 0) {
            return;
        }
        $tabWidth = $phpcsFile->config->tabWidth;
        $fix = \false;
        foreach ($matches[0] as [$match, $offset]) {
            $firstPointerOnLine = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstNonWhitespaceOnLine($phpcsFile, $whitespacePointer - 1);
            $indendation = \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $firstPointerOnLine);
            $indendationWithoutTabs = \str_replace(\SlevomatCodingStandard\Helpers\IndentationHelper::TAB_INDENT, $tabWidth === 0 ? \SlevomatCodingStandard\Helpers\IndentationHelper::SPACES_INDENT : \str_repeat(' ', $tabWidth), $indendation);
            $position = $tokens[$whitespacePointer]['column'] + $offset - \strlen($indendation) + \strlen($indendationWithoutTabs);
            $fixable = $phpcsFile->addFixableError(\sprintf('Duplicate spaces at position %d.', $position), $whitespacePointer, self::CODE_DUPLICATE_SPACES);
            if ($fixable) {
                $fix = \true;
            }
        }
        if (!$fix) {
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->replaceToken($whitespacePointer, \preg_replace('~ {2,}~', ' ', $content));
        $phpcsFile->fixer->endChangeset();
    }
}