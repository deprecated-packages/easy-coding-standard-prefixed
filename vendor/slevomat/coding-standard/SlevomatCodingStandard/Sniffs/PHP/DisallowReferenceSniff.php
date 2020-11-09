<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\PHP;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\IdentificatorHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function in_array;
use const T_AS;
use const _PhpScoperf5f75c22067b\T_BITWISE_AND;
use const _PhpScoperf5f75c22067b\T_COMMA;
use const T_DOUBLE_ARROW;
use const _PhpScoperf5f75c22067b\T_EQUAL;
use const _PhpScoperf5f75c22067b\T_OPEN_PARENTHESIS;
use const _PhpScoperf5f75c22067b\T_OPEN_SHORT_ARRAY;
use const T_USE;
class DisallowReferenceSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_DISALLOWED_PASSING_BY_REFERENCE = 'DisallowedPassingByReference';
    public const CODE_DISALLOWED_RETURNING_REFERENCE = 'DisallowedReturningReference';
    public const CODE_DISALLOWED_INHERITING_VARIABLE_BY_REFERENCE = 'DisallowedInheritingVariableByReference';
    public const CODE_DISALLOWED_ASSIGNING_BY_REFERENCE = 'DisallowedAssigningByReference';
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
        $tokens = $phpcsFile->getTokens();
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $referencePointer - 1);
        if (\in_array($tokens[$previousPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
            $phpcsFile->addError('Returning reference is disallowed.', $referencePointer, self::CODE_DISALLOWED_RETURNING_REFERENCE);
            return;
        }
        $previousParenthesisOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_PARENTHESIS, $referencePointer - 1);
        if ($previousParenthesisOpenerPointer !== null && $tokens[$previousParenthesisOpenerPointer]['parenthesis_closer'] > $referencePointer) {
            if (\array_key_exists('parenthesis_owner', $tokens[$previousParenthesisOpenerPointer])) {
                $parenthesisOwnerPointer = $tokens[$previousParenthesisOpenerPointer]['parenthesis_owner'];
                if (\in_array($tokens[$parenthesisOwnerPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                    $phpcsFile->addError('Passing by reference is disallowed.', $referencePointer, self::CODE_DISALLOWED_PASSING_BY_REFERENCE);
                    return;
                }
            }
            $pointerBeforeParenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousParenthesisOpenerPointer - 1);
            if ($pointerBeforeParenthesisOpener !== null && $tokens[$pointerBeforeParenthesisOpener]['code'] === \T_USE) {
                $phpcsFile->addError('Inheriting variable by reference is disallowed.', $referencePointer, self::CODE_DISALLOWED_INHERITING_VARIABLE_BY_REFERENCE);
                return;
            }
        }
        /** @var int $variableStartPointer */
        $variableStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $referencePointer + 1);
        $variableEndPointer = \SlevomatCodingStandard\Helpers\IdentificatorHelper::findEndPointer($phpcsFile, $variableStartPointer);
        if ($variableEndPointer === null) {
            return;
        }
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $referencePointer - 1);
        if (!\in_array($tokens[$previousPointer]['code'], [\T_EQUAL, \T_DOUBLE_ARROW, \T_OPEN_SHORT_ARRAY, \T_COMMA, \T_AS], \true)) {
            return;
        }
        $phpcsFile->addError('Assigning by reference is disallowed.', $referencePointer, self::CODE_DISALLOWED_ASSIGNING_BY_REFERENCE);
    }
}
