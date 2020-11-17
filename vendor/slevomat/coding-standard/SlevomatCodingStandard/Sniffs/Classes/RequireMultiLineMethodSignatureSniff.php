<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use Exception;
use PHP_CodeSniffer\Files\File;
use SlevomatCodingStandard\Helpers\FunctionHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function count;
use function preg_match;
use function sprintf;
use function strlen;
use const _PhpScoperad4b7e2c09d8\T_COMMA;
use const T_WHITESPACE;
class RequireMultiLineMethodSignatureSniff extends \SlevomatCodingStandard\Sniffs\Classes\AbstractMethodSignature
{
    public const CODE_REQUIRED_MULTI_LINE_SIGNATURE = 'RequiredMultiLineSignature';
    /** @var int */
    public $minLineLength = 121;
    /** @var string[] */
    public $includedMethodPatterns = [];
    /** @var string[]|null */
    public $includedMethodNormalizedPatterns;
    /** @var string[] */
    public $excludedMethodPatterns = [];
    /** @var string[]|null */
    public $excludedMethodNormalizedPatterns;
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $methodPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $methodPointer) : void
    {
        if (!\SlevomatCodingStandard\Helpers\FunctionHelper::isMethod($phpcsFile, $methodPointer)) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        [$signatureStartPointer, $signatureEndPointer] = $this->getSignatureStartAndEndPointers($phpcsFile, $methodPointer);
        if ($tokens[$signatureStartPointer]['line'] < $tokens[$signatureEndPointer]['line']) {
            return;
        }
        $parameters = $phpcsFile->getMethodParameters($methodPointer);
        if (\count($parameters) === 0) {
            return;
        }
        $signature = $this->getSignature($phpcsFile, $signatureStartPointer, $signatureEndPointer);
        $signatureWithoutTabIndentation = $this->getSignatureWithoutTabs($phpcsFile, $signature);
        $methodName = \SlevomatCodingStandard\Helpers\FunctionHelper::getName($phpcsFile, $methodPointer);
        if (\count($this->includedMethodPatterns) !== 0 && !$this->isMethodNameInPatterns($methodName, $this->getIncludedMethodNormalizedPatterns())) {
            return;
        }
        if (\count($this->excludedMethodPatterns) !== 0 && $this->isMethodNameInPatterns($methodName, $this->getExcludedMethodNormalizedPatterns())) {
            return;
        }
        $minLineLength = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->minLineLength);
        if ($minLineLength !== 0 && \strlen($signatureWithoutTabIndentation) < $minLineLength) {
            return;
        }
        $error = \sprintf('Signature of method "%s" should be splitted to more lines so each parameter is on its own line.', $methodName);
        $fix = $phpcsFile->addFixableError($error, $methodPointer, self::CODE_REQUIRED_MULTI_LINE_SIGNATURE);
        if (!$fix) {
            return;
        }
        $indentation = $tokens[$signatureStartPointer]['content'];
        $phpcsFile->fixer->beginChangeset();
        foreach ($parameters as $parameter) {
            $pointerBeforeParameter = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_COMMA, $parameter['token'] - 1, $tokens[$methodPointer]['parenthesis_opener']);
            if ($pointerBeforeParameter === null) {
                $pointerBeforeParameter = $tokens[$methodPointer]['parenthesis_opener'];
            }
            $phpcsFile->fixer->addContent($pointerBeforeParameter, $phpcsFile->eolChar . \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($indentation));
            for ($i = $pointerBeforeParameter + 1; $i < $parameter['token']; $i++) {
                if ($tokens[$i]['code'] !== \T_WHITESPACE) {
                    break;
                }
                $phpcsFile->fixer->replaceToken($i, '');
            }
        }
        $phpcsFile->fixer->addContentBefore($tokens[$methodPointer]['parenthesis_closer'], $phpcsFile->eolChar . $indentation);
        $phpcsFile->fixer->endChangeset();
    }
    /**
     * @param string $methodName
     * @param string[] $normalizedPatterns
     * @return bool
     */
    private function isMethodNameInPatterns(string $methodName, array $normalizedPatterns) : bool
    {
        foreach ($normalizedPatterns as $pattern) {
            if (!\SlevomatCodingStandard\Helpers\SniffSettingsHelper::isValidRegularExpression($pattern)) {
                throw new \Exception(\sprintf('%s is not valid PCRE pattern.', $pattern));
            }
            if (\preg_match($pattern, $methodName) !== 0) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * @return string[]
     */
    private function getIncludedMethodNormalizedPatterns() : array
    {
        if ($this->includedMethodNormalizedPatterns === null) {
            $this->includedMethodNormalizedPatterns = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->includedMethodPatterns);
        }
        return $this->includedMethodNormalizedPatterns;
    }
    /**
     * @return string[]
     */
    private function getExcludedMethodNormalizedPatterns() : array
    {
        if ($this->excludedMethodNormalizedPatterns === null) {
            $this->excludedMethodNormalizedPatterns = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->excludedMethodPatterns);
        }
        return $this->excludedMethodNormalizedPatterns;
    }
}
