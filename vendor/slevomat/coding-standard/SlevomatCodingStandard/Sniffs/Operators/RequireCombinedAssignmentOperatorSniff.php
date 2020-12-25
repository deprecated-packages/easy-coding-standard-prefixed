<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Operators;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\IdentificatorHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function sprintf;
use const _PhpScoper92597f5b42a7\T_BITWISE_AND;
use const _PhpScoper92597f5b42a7\T_BITWISE_OR;
use const _PhpScoper92597f5b42a7\T_BITWISE_XOR;
use const _PhpScoper92597f5b42a7\T_DIVIDE;
use const _PhpScoper92597f5b42a7\T_EQUAL;
use const _PhpScoper92597f5b42a7\T_MINUS;
use const _PhpScoper92597f5b42a7\T_MODULUS;
use const _PhpScoper92597f5b42a7\T_MULTIPLY;
use const _PhpScoper92597f5b42a7\T_PLUS;
use const T_POW;
use const _PhpScoper92597f5b42a7\T_SEMICOLON;
use const T_SL;
use const T_SR;
use const _PhpScoper92597f5b42a7\T_STRING_CONCAT;
class RequireCombinedAssignmentOperatorSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_REQUIRED_COMBINED_ASSIGMENT_OPERATOR = 'RequiredCombinedAssigmentOperator';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_EQUAL];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $equalPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $equalPointer) : void
    {
        /** @var int $variableStartPointer */
        $variableStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $equalPointer + 1);
        $variableEndPointer = \SlevomatCodingStandard\Helpers\IdentificatorHelper::findEndPointer($phpcsFile, $variableStartPointer);
        if ($variableEndPointer === null) {
            return;
        }
        $operatorPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $variableEndPointer + 1);
        $tokens = $phpcsFile->getTokens();
        $operators = [\T_BITWISE_AND => '&=', \T_BITWISE_OR => '|=', \T_STRING_CONCAT => '.=', \T_DIVIDE => '/=', \T_MINUS => '-=', \T_POW => '**=', \T_MODULUS => '%=', \T_MULTIPLY => '*=', \T_PLUS => '+=', \T_SL => '<<=', \T_SR => '>>=', \T_BITWISE_XOR => '^='];
        if (!\array_key_exists($tokens[$operatorPointer]['code'], $operators)) {
            return;
        }
        $variableContent = \SlevomatCodingStandard\Helpers\IdentificatorHelper::getContent($phpcsFile, $variableStartPointer, $variableEndPointer);
        /** @var int $beforeEqualEndPointer */
        $beforeEqualEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $equalPointer - 1);
        $beforeEqualStartPointer = \SlevomatCodingStandard\Helpers\IdentificatorHelper::findStartPointer($phpcsFile, $beforeEqualEndPointer);
        if ($beforeEqualStartPointer === null) {
            return;
        }
        $beforeEqualVariableContent = \SlevomatCodingStandard\Helpers\IdentificatorHelper::getContent($phpcsFile, $beforeEqualStartPointer, $beforeEqualEndPointer);
        if ($beforeEqualVariableContent !== $variableContent) {
            return;
        }
        $semicolonPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $equalPointer + 1);
        if (\SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \PHP_CodeSniffer\Util\Tokens::$operators, $operatorPointer + 1, $semicolonPointer) !== null) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Use "%s" operator instead of "=" and "%s".', $operators[$tokens[$operatorPointer]['code']], $tokens[$operatorPointer]['content']), $equalPointer, self::CODE_REQUIRED_COMBINED_ASSIGMENT_OPERATOR);
        if (!$fix) {
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->replaceToken($equalPointer, $operators[$tokens[$operatorPointer]['code']]);
        for ($i = $equalPointer + 1; $i <= $operatorPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
}
