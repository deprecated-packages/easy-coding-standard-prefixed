<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\StringHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use function sprintf;
use function strlen;
use function substr;
use const T_AS;
use const _PhpScoper065e4ba46e6d\T_SEMICOLON;
use const T_USE;
class UseFromSameNamespaceSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_USE_FROM_SAME_NAMESPACE = 'UseFromSameNamespace';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_USE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $usePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $usePointer) : void
    {
        if (\SlevomatCodingStandard\Helpers\UseStatementHelper::isAnonymousFunctionUse($phpcsFile, $usePointer) || \SlevomatCodingStandard\Helpers\UseStatementHelper::isTraitUse($phpcsFile, $usePointer)) {
            return;
        }
        $namespaceName = \SlevomatCodingStandard\Helpers\NamespaceHelper::findCurrentNamespaceName($phpcsFile, $usePointer);
        if ($namespaceName === null) {
            $namespaceName = '';
        }
        $usedTypeName = \SlevomatCodingStandard\Helpers\UseStatementHelper::getFullyQualifiedTypeNameFromUse($phpcsFile, $usePointer);
        if (!\SlevomatCodingStandard\Helpers\StringHelper::startsWith($usedTypeName, $namespaceName)) {
            return;
        }
        $asPointer = $this->findAsPointer($phpcsFile, $usePointer);
        if ($asPointer !== null) {
            return;
        }
        $usedTypeNameRest = \substr($usedTypeName, \strlen($namespaceName));
        if (!\SlevomatCodingStandard\Helpers\NamespaceHelper::isFullyQualifiedName($usedTypeNameRest) && $namespaceName !== '') {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\NamespaceHelper::hasNamespace($usedTypeNameRest)) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Use %s is from the same namespace – that is prohibited.', $usedTypeName), $usePointer, self::CODE_USE_FROM_SAME_NAMESPACE);
        if (!$fix) {
            return;
        }
        $endPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $usePointer) + 1;
        $phpcsFile->fixer->beginChangeset();
        for ($i = $usePointer; $i <= $endPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function findAsPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $startPointer) : ?int
    {
        return \SlevomatCodingStandard\Helpers\TokenHelper::findNextLocal($phpcsFile, \T_AS, $startPointer);
    }
}
