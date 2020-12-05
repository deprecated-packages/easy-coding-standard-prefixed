<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\PHP;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\IdentificatorHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function in_array;
use function sprintf;
use function str_repeat;
use function strlen;
use const T_AS;
use const _PhpScoperaba240c3d5f1\T_BITWISE_AND;
use const _PhpScoperaba240c3d5f1\T_COMMA;
use const T_DOUBLE_ARROW;
use const _PhpScoperaba240c3d5f1\T_EQUAL;
use const _PhpScoperaba240c3d5f1\T_OPEN_PARENTHESIS;
use const _PhpScoperaba240c3d5f1\T_OPEN_SHORT_ARRAY;
use const T_USE;
use const T_WHITESPACE;
class ReferenceSpacingSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_INCORRECT_SPACES_AFTER_REFERENCE = 'IncorrectSpacesAfterReference';
    /** @var int */
    public $spacesCountAfterReference = 0;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_BITWISE_AND];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $referencePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $referencePointer) : void
    {
        if (!$this->isReference($phpcsFile, $referencePointer)) {
            return;
        }
        $pointerAfterWhitespace = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $referencePointer + 1);
        $whitespace = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $referencePointer + 1, $pointerAfterWhitespace - 1);
        $requiredSpacesCount = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->spacesCountAfterReference);
        $actualSpacesCount = \strlen($whitespace);
        if ($requiredSpacesCount === $actualSpacesCount) {
            return;
        }
        $errorMessage = $requiredSpacesCount === 0 ? 'There must be no whitespace after reference.' : \sprintf('There must be exactly %d whitespace%s after reference.', $requiredSpacesCount, $requiredSpacesCount !== 1 ? 's' : '');
        $fix = $phpcsFile->addFixableError($errorMessage, $referencePointer, self::CODE_INCORRECT_SPACES_AFTER_REFERENCE);
        if (!$fix) {
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->addContent($referencePointer, \str_repeat(' ', $requiredSpacesCount));
        for ($i = $referencePointer + 1; $i < $pointerAfterWhitespace; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function isReference(\PHP_CodeSniffer\Files\File $phpcsFile, int $referencePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $referencePointer - 1);
        if (\in_array($tokens[$previousPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
            return \true;
        }
        $previousParenthesisOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_PARENTHESIS, $referencePointer - 1);
        if ($previousParenthesisOpenerPointer !== null && $tokens[$previousParenthesisOpenerPointer]['parenthesis_closer'] > $referencePointer) {
            if (\array_key_exists('parenthesis_owner', $tokens[$previousParenthesisOpenerPointer])) {
                $parenthesisOwnerPointer = $tokens[$previousParenthesisOpenerPointer]['parenthesis_owner'];
                if (\in_array($tokens[$parenthesisOwnerPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                    return \true;
                }
            }
            $pointerBeforeParenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousParenthesisOpenerPointer - 1);
            if ($pointerBeforeParenthesisOpener !== null && $tokens[$pointerBeforeParenthesisOpener]['code'] === \T_USE) {
                return \true;
            }
        }
        /** @var int $variableStartPointer */
        $variableStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $referencePointer + 1);
        $variableEndPointer = \SlevomatCodingStandard\Helpers\IdentificatorHelper::findEndPointer($phpcsFile, $variableStartPointer);
        if ($variableEndPointer === null) {
            return \false;
        }
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $referencePointer - 1);
        return \in_array($tokens[$previousPointer]['code'], [\T_EQUAL, \T_DOUBLE_ARROW, \T_OPEN_SHORT_ARRAY, \T_COMMA, \T_AS], \true);
    }
}
