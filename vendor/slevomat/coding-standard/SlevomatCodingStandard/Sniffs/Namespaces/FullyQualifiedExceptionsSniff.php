<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\ReferencedNameHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\StringHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatement;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use Throwable;
use function array_reverse;
use function in_array;
use function sprintf;
use const T_OPEN_TAG;
class FullyQualifiedExceptionsSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_NON_FULLY_QUALIFIED_EXCEPTION = 'NonFullyQualifiedException';
    /** @var string[] */
    public $specialExceptionNames = [];
    /** @var string[] */
    public $ignoredNames = [];
    /** @var string[]|null */
    private $normalizedSpecialExceptionNames;
    /** @var string[]|null */
    private $normalizedIgnoredNames;
    /**
     * @return array<int, (int|string)>
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
        $namespacePointers = \array_reverse(\SlevomatCodingStandard\Helpers\NamespaceHelper::getAllNamespacesPointers($phpcsFile));
        $referencedNames = \SlevomatCodingStandard\Helpers\ReferencedNameHelper::getAllReferencedNames($phpcsFile, $openTagPointer);
        foreach ($referencedNames as $referencedName) {
            $pointer = $referencedName->getStartPointer();
            $name = $referencedName->getNameAsReferencedInFile();
            $uniqueId = \SlevomatCodingStandard\Helpers\UseStatement::getUniqueId($referencedName->getType(), $name);
            $useStatements = \SlevomatCodingStandard\Helpers\UseStatementHelper::getUseStatementsForPointer($phpcsFile, $pointer);
            if (isset($useStatements[$uniqueId]) && $referencedName->hasSameUseStatementType($useStatements[$uniqueId])) {
                $useStatement = $useStatements[$uniqueId];
                if (\in_array($useStatement->getFullyQualifiedTypeName(), $this->getIgnoredNames(), \true) || !\SlevomatCodingStandard\Helpers\StringHelper::endsWith($useStatement->getFullyQualifiedTypeName(), 'Exception') && $useStatement->getFullyQualifiedTypeName() !== \Throwable::class && (!\SlevomatCodingStandard\Helpers\StringHelper::endsWith($useStatement->getFullyQualifiedTypeName(), 'Error') || \SlevomatCodingStandard\Helpers\NamespaceHelper::hasNamespace($useStatement->getFullyQualifiedTypeName())) && !\in_array($useStatement->getFullyQualifiedTypeName(), $this->getSpecialExceptionNames(), \true)) {
                    continue;
                }
            } else {
                $fileNamespacePointer = null;
                if ($namespacePointers !== []) {
                    foreach ($namespacePointers as $namespacePointer) {
                        if ($namespacePointer < $pointer) {
                            $fileNamespacePointer = $namespacePointer;
                            break;
                        }
                    }
                }
                $fileNamespace = $fileNamespacePointer !== null ? \SlevomatCodingStandard\Helpers\NamespaceHelper::getName($phpcsFile, $fileNamespacePointer) : null;
                $canonicalName = $name;
                if (!\SlevomatCodingStandard\Helpers\NamespaceHelper::isFullyQualifiedName($name) && $fileNamespace !== null) {
                    $canonicalName = \sprintf('%s%s%s', $fileNamespace, \SlevomatCodingStandard\Helpers\NamespaceHelper::NAMESPACE_SEPARATOR, $name);
                }
                if (\in_array($canonicalName, $this->getIgnoredNames(), \true) || !\SlevomatCodingStandard\Helpers\StringHelper::endsWith($name, 'Exception') && $name !== \Throwable::class && (!\SlevomatCodingStandard\Helpers\StringHelper::endsWith($canonicalName, 'Error') || \SlevomatCodingStandard\Helpers\NamespaceHelper::hasNamespace($canonicalName)) && !\in_array($canonicalName, $this->getSpecialExceptionNames(), \true)) {
                    continue;
                }
            }
            if (\SlevomatCodingStandard\Helpers\NamespaceHelper::isFullyQualifiedName($name)) {
                continue;
            }
            $fix = $phpcsFile->addFixableError(\sprintf('Exception %s should be referenced via a fully qualified name.', $name), $pointer, self::CODE_NON_FULLY_QUALIFIED_EXCEPTION);
            if (!$fix) {
                continue;
            }
            $fullyQualifiedName = \SlevomatCodingStandard\Helpers\NamespaceHelper::resolveClassName($phpcsFile, $name, $pointer);
            $phpcsFile->fixer->beginChangeset();
            for ($i = $referencedName->getStartPointer(); $i <= $referencedName->getEndPointer(); $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            $phpcsFile->fixer->addContent($referencedName->getStartPointer(), $fullyQualifiedName);
            $phpcsFile->fixer->endChangeset();
        }
    }
    /**
     * @return string[]
     */
    private function getSpecialExceptionNames() : array
    {
        if ($this->normalizedSpecialExceptionNames === null) {
            $this->normalizedSpecialExceptionNames = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->specialExceptionNames);
        }
        return $this->normalizedSpecialExceptionNames;
    }
    /**
     * @return string[]
     */
    private function getIgnoredNames() : array
    {
        if ($this->normalizedIgnoredNames === null) {
            $this->normalizedIgnoredNames = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->ignoredNames);
        }
        return $this->normalizedIgnoredNames;
    }
}
