<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use function count;
use function sprintf;
use const T_AS;
use const T_OPEN_TAG;
use const _PhpScoper528afa732cbd\T_SEMICOLON;
class UselessAliasSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_USELESS_ALIAS = 'UselessAlias';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_OPEN_TAG];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $openTagPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $openTagPointer) : void
    {
        if (\SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_TAG, $openTagPointer - 1) !== null) {
            return;
        }
        $fileUseStatements = \SlevomatCodingStandard\Helpers\UseStatementHelper::getFileUseStatements($phpcsFile);
        if (\count($fileUseStatements) === 0) {
            return;
        }
        foreach ($fileUseStatements as $useStatements) {
            foreach ($useStatements as $useStatement) {
                if ($useStatement->getAlias() === null) {
                    continue;
                }
                $unqualifiedName = \SlevomatCodingStandard\Helpers\NamespaceHelper::getUnqualifiedNameFromFullyQualifiedName($useStatement->getFullyQualifiedTypeName());
                if ($unqualifiedName !== $useStatement->getAlias()) {
                    continue;
                }
                $fix = $phpcsFile->addFixableError(\sprintf('Useless alias "%s" for use of "%s".', $useStatement->getAlias(), $useStatement->getFullyQualifiedTypeName()), $useStatement->getPointer(), self::CODE_USELESS_ALIAS);
                if (!$fix) {
                    continue;
                }
                $asPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_AS, $useStatement->getPointer() + 1);
                $nameEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::getOnlyNameTokenCodes(), $asPointer - 1);
                $useSemicolonPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $asPointer + 1);
                $phpcsFile->fixer->beginChangeset();
                for ($i = $nameEndPointer + 1; $i < $useSemicolonPointer; $i++) {
                    $phpcsFile->fixer->replaceToken($i, '');
                }
                $phpcsFile->fixer->endChangeset();
            }
        }
    }
}
