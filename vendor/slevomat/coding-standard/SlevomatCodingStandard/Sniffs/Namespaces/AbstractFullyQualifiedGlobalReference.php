<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\ReferencedName;
use SlevomatCodingStandard\Helpers\ReferencedNameHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatement;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use function array_flip;
use function array_key_exists;
use function array_map;
use function sprintf;
use function strtolower;
use const T_OPEN_TAG;
/**
 * @internal
 */
abstract class AbstractFullyQualifiedGlobalReference implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_NON_FULLY_QUALIFIED = 'NonFullyQualified';
    /** @var string[] */
    public $exclude = [];
    /** @var string[] */
    public $include = [];
    /** @var string[]|null */
    private $normalizedExclude;
    /** @var string[]|null */
    private $normalizedInclude;
    protected abstract function getNotFullyQualifiedMessage() : string;
    protected abstract function isCaseSensitive() : bool;
    protected abstract function isValidType(\SlevomatCodingStandard\Helpers\ReferencedName $name) : bool;
    /**
     * @return (int|string)[]
     */
    public function register() : array
    {
        return [\T_OPEN_TAG];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $openTagPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $openTagPointer) : void
    {
        if (\SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_TAG, $openTagPointer - 1) !== null) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $namespacePointers = \SlevomatCodingStandard\Helpers\NamespaceHelper::getAllNamespacesPointers($phpcsFile);
        $referencedNames = \SlevomatCodingStandard\Helpers\ReferencedNameHelper::getAllReferencedNames($phpcsFile, $openTagPointer);
        $include = \array_flip($this->getNormalizedInclude());
        $exclude = \array_flip($this->getNormalizedExclude());
        foreach ($referencedNames as $referencedName) {
            $name = $referencedName->getNameAsReferencedInFile();
            $namePointer = $referencedName->getStartPointer();
            if (!$this->isValidType($referencedName)) {
                continue;
            }
            if (\SlevomatCodingStandard\Helpers\NamespaceHelper::isFullyQualifiedName($name)) {
                continue;
            }
            if (\SlevomatCodingStandard\Helpers\NamespaceHelper::hasNamespace($name)) {
                continue;
            }
            if ($namespacePointers === []) {
                continue;
            }
            $canonicalName = $this->isCaseSensitive() ? $name : \strtolower($name);
            $useStatements = \SlevomatCodingStandard\Helpers\UseStatementHelper::getUseStatementsForPointer($phpcsFile, $namePointer);
            if (\array_key_exists(\SlevomatCodingStandard\Helpers\UseStatement::getUniqueId($referencedName->getType(), $canonicalName), $useStatements)) {
                $fullyQualifiedName = \SlevomatCodingStandard\Helpers\NamespaceHelper::resolveName($phpcsFile, $name, $referencedName->getType(), $namePointer);
                if (\SlevomatCodingStandard\Helpers\NamespaceHelper::hasNamespace($fullyQualifiedName)) {
                    continue;
                }
            }
            if ($include !== [] && !\array_key_exists($canonicalName, $include)) {
                continue;
            }
            if (\array_key_exists($canonicalName, $exclude)) {
                continue;
            }
            $fix = $phpcsFile->addFixableError(\sprintf($this->getNotFullyQualifiedMessage(), $tokens[$namePointer]['content']), $namePointer, self::CODE_NON_FULLY_QUALIFIED);
            if (!$fix) {
                continue;
            }
            $phpcsFile->fixer->beginChangeset();
            $phpcsFile->fixer->addContentBefore($namePointer, \SlevomatCodingStandard\Helpers\NamespaceHelper::NAMESPACE_SEPARATOR);
            $phpcsFile->fixer->endChangeset();
        }
    }
    /**
     * @return string[]
     */
    protected function getNormalizedInclude() : array
    {
        if ($this->normalizedInclude === null) {
            $this->normalizedInclude = $this->normalizeNames($this->include);
        }
        return $this->normalizedInclude;
    }
    /**
     * @return string[]
     */
    private function getNormalizedExclude() : array
    {
        if ($this->normalizedExclude === null) {
            $this->normalizedExclude = $this->normalizeNames($this->exclude);
        }
        return $this->normalizedExclude;
    }
    /**
     * @param string[] $names
     * @return string[]
     */
    private function normalizeNames(array $names) : array
    {
        $names = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($names);
        if (!$this->isCaseSensitive()) {
            $names = \array_map(static function (string $name) : string {
                return \strtolower($name);
            }, $names);
        }
        return $names;
    }
}
