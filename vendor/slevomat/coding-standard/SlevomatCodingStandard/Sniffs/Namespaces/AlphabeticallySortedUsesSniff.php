<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatement;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use function array_map;
use function count;
use function end;
use function explode;
use function implode;
use function min;
use function reset;
use function sprintf;
use function strcasecmp;
use function strcmp;
use function uasort;
use const T_OPEN_TAG;
use const _PhpScoper37a255897161\T_SEMICOLON;
class AlphabeticallySortedUsesSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_INCORRECT_ORDER = 'IncorrectlyOrderedUses';
    /** @var bool */
    public $psr12Compatible = \true;
    /** @var bool */
    public $caseSensitive = \false;
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
        foreach ($fileUseStatements as $useStatements) {
            $lastUse = null;
            foreach ($useStatements as $useStatement) {
                if ($lastUse === null) {
                    $lastUse = $useStatement;
                } else {
                    $order = $this->compareUseStatements($useStatement, $lastUse);
                    if ($order < 0) {
                        $fix = $phpcsFile->addFixableError(\sprintf('Use statements should be sorted alphabetically. The first wrong one is %s.', $useStatement->getFullyQualifiedTypeName()), $useStatement->getPointer(), self::CODE_INCORRECT_ORDER);
                        if ($fix) {
                            $this->fixAlphabeticalOrder($phpcsFile, $useStatements);
                        }
                        return;
                    }
                    $lastUse = $useStatement;
                }
            }
        }
    }
    /**
     * @param File $phpcsFile
     * @param UseStatement[] $useStatements
     */
    private function fixAlphabeticalOrder(\PHP_CodeSniffer\Files\File $phpcsFile, array $useStatements) : void
    {
        /** @var UseStatement $firstUseStatement */
        $firstUseStatement = \reset($useStatements);
        /** @var UseStatement $lastUseStatement */
        $lastUseStatement = \end($useStatements);
        $lastSemicolonPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $lastUseStatement->getPointer());
        $phpcsFile->fixer->beginChangeset();
        for ($i = $firstUseStatement->getPointer(); $i <= $lastSemicolonPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        \uasort($useStatements, function (\SlevomatCodingStandard\Helpers\UseStatement $a, \SlevomatCodingStandard\Helpers\UseStatement $b) : int {
            return $this->compareUseStatements($a, $b);
        });
        $phpcsFile->fixer->addContent($firstUseStatement->getPointer(), \implode($phpcsFile->eolChar, \array_map(static function (\SlevomatCodingStandard\Helpers\UseStatement $useStatement) : string {
            $unqualifiedName = \SlevomatCodingStandard\Helpers\NamespaceHelper::getUnqualifiedNameFromFullyQualifiedName($useStatement->getFullyQualifiedTypeName());
            $useTypeName = \SlevomatCodingStandard\Helpers\UseStatement::getTypeName($useStatement->getType());
            $useTypeFormatted = $useTypeName !== null ? \sprintf('%s ', $useTypeName) : '';
            if ($unqualifiedName === $useStatement->getNameAsReferencedInFile()) {
                return \sprintf('use %s%s;', $useTypeFormatted, $useStatement->getFullyQualifiedTypeName());
            }
            return \sprintf('use %s%s as %s;', $useTypeFormatted, $useStatement->getFullyQualifiedTypeName(), $useStatement->getNameAsReferencedInFile());
        }, $useStatements)));
        $phpcsFile->fixer->endChangeset();
    }
    private function compareUseStatements(\SlevomatCodingStandard\Helpers\UseStatement $a, \SlevomatCodingStandard\Helpers\UseStatement $b) : int
    {
        if (!$a->hasSameType($b)) {
            $order = [\SlevomatCodingStandard\Helpers\UseStatement::TYPE_DEFAULT => 1, \SlevomatCodingStandard\Helpers\UseStatement::TYPE_FUNCTION => $this->psr12Compatible ? 2 : 3, \SlevomatCodingStandard\Helpers\UseStatement::TYPE_CONSTANT => $this->psr12Compatible ? 3 : 2];
            return $order[$a->getType()] <=> $order[$b->getType()];
        }
        $aNameParts = \explode(\SlevomatCodingStandard\Helpers\NamespaceHelper::NAMESPACE_SEPARATOR, $a->getFullyQualifiedTypeName());
        $bNameParts = \explode(\SlevomatCodingStandard\Helpers\NamespaceHelper::NAMESPACE_SEPARATOR, $b->getFullyQualifiedTypeName());
        $minPartsCount = \min(\count($aNameParts), \count($bNameParts));
        for ($i = 0; $i < $minPartsCount; $i++) {
            $comparison = $this->compare($aNameParts[$i], $bNameParts[$i]);
            if ($comparison === 0) {
                continue;
            }
            return $comparison;
        }
        return \count($aNameParts) <=> \count($bNameParts);
    }
    private function compare(string $a, string $b) : int
    {
        if ($this->caseSensitive) {
            return \strcmp($a, $b);
        }
        return \strcasecmp($a, $b);
    }
}
