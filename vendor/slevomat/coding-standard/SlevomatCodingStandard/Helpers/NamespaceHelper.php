<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use function array_reverse;
use function array_slice;
use function count;
use function defined;
use function explode;
use function implode;
use function in_array;
use function ltrim;
use function sprintf;
use function strpos;
use const _PhpScoperea337ed74749\T_NAME_FULLY_QUALIFIED;
use const T_NAMESPACE;
use const T_NS_SEPARATOR;
/**
 * Terms "unqualified", "qualified" and "fully qualified" have the same meaning as described here:
 * http://php.net/manual/en/language.namespaces.rules.php
 *
 * "Canonical" is a fully qualified name without the leading backslash.
 */
class NamespaceHelper
{
    public const NAMESPACE_SEPARATOR = '\\';
    /**
     * @param File $phpcsFile
     * @return int[]
     */
    public static function getAllNamespacesPointers(\PHP_CodeSniffer\Files\File $phpcsFile) : array
    {
        $lazyValue = static function () use($phpcsFile) : array {
            return \SlevomatCodingStandard\Helpers\TokenHelper::findNextAll($phpcsFile, \T_NAMESPACE, 0);
        };
        return \SlevomatCodingStandard\Helpers\SniffLocalCache::getAndSetIfNotCached($phpcsFile, 'namespacePointers', $lazyValue);
    }
    public static function isFullyQualifiedName(string $typeName) : bool
    {
        return \SlevomatCodingStandard\Helpers\StringHelper::startsWith($typeName, self::NAMESPACE_SEPARATOR);
    }
    public static function isFullyQualifiedPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : bool
    {
        $fullyQualifiedTokenCodes = [\T_NS_SEPARATOR];
        if (\defined('T_NAME_FULLY_QUALIFIED')) {
            $fullyQualifiedTokenCodes[] = \T_NAME_FULLY_QUALIFIED;
        }
        return \in_array($phpcsFile->getTokens()[$pointer]['code'], $fullyQualifiedTokenCodes, \true);
    }
    public static function getFullyQualifiedTypeName(string $typeName) : string
    {
        if (self::isFullyQualifiedName($typeName)) {
            return $typeName;
        }
        return \sprintf('%s%s', self::NAMESPACE_SEPARATOR, $typeName);
    }
    public static function hasNamespace(string $typeName) : bool
    {
        $parts = self::getNameParts($typeName);
        return \count($parts) > 1;
    }
    /**
     * @param string $name
     * @return string[]
     */
    public static function getNameParts(string $name) : array
    {
        $name = self::normalizeToCanonicalName($name);
        return \explode(self::NAMESPACE_SEPARATOR, $name);
    }
    public static function getLastNamePart(string $name) : string
    {
        return \array_slice(self::getNameParts($name), -1)[0];
    }
    public static function getName(\PHP_CodeSniffer\Files\File $phpcsFile, int $namespacePointer) : string
    {
        /** @var int $namespaceNameStartPointer */
        $namespaceNameStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $namespacePointer + 1);
        $namespaceNameEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes(), $namespaceNameStartPointer + 1) - 1;
        return \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $namespaceNameStartPointer, $namespaceNameEndPointer);
    }
    public static function findCurrentNamespacePointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : ?int
    {
        $allNamespacesPointers = \array_reverse(self::getAllNamespacesPointers($phpcsFile));
        foreach ($allNamespacesPointers as $namespacesPointer) {
            if ($namespacesPointer < $pointer) {
                return $namespacesPointer;
            }
        }
        return null;
    }
    public static function findCurrentNamespaceName(\PHP_CodeSniffer\Files\File $phpcsFile, int $anyPointer) : ?string
    {
        $namespacePointer = self::findCurrentNamespacePointer($phpcsFile, $anyPointer);
        if ($namespacePointer === null) {
            return null;
        }
        return self::getName($phpcsFile, $namespacePointer);
    }
    public static function getUnqualifiedNameFromFullyQualifiedName(string $name) : string
    {
        $parts = self::getNameParts($name);
        return $parts[\count($parts) - 1];
    }
    public static function isQualifiedName(string $name) : bool
    {
        return \strpos($name, self::NAMESPACE_SEPARATOR) !== \false;
    }
    public static function normalizeToCanonicalName(string $fullyQualifiedName) : string
    {
        return \ltrim($fullyQualifiedName, self::NAMESPACE_SEPARATOR);
    }
    public static function isTypeInNamespace(string $typeName, string $namespace) : bool
    {
        return \SlevomatCodingStandard\Helpers\StringHelper::startsWith(self::normalizeToCanonicalName($typeName) . '\\', $namespace . '\\');
    }
    public static function resolveClassName(\PHP_CodeSniffer\Files\File $phpcsFile, string $nameAsReferencedInFile, int $currentPointer) : string
    {
        return self::resolveName($phpcsFile, $nameAsReferencedInFile, \SlevomatCodingStandard\Helpers\ReferencedName::TYPE_DEFAULT, $currentPointer);
    }
    public static function resolveName(\PHP_CodeSniffer\Files\File $phpcsFile, string $nameAsReferencedInFile, string $type, int $currentPointer) : string
    {
        if (self::isFullyQualifiedName($nameAsReferencedInFile)) {
            return $nameAsReferencedInFile;
        }
        $useStatements = \SlevomatCodingStandard\Helpers\UseStatementHelper::getUseStatementsForPointer($phpcsFile, $currentPointer);
        $uniqueId = \SlevomatCodingStandard\Helpers\UseStatement::getUniqueId($type, self::normalizeToCanonicalName($nameAsReferencedInFile));
        if (isset($useStatements[$uniqueId])) {
            return \sprintf('%s%s', self::NAMESPACE_SEPARATOR, $useStatements[$uniqueId]->getFullyQualifiedTypeName());
        }
        $nameParts = self::getNameParts($nameAsReferencedInFile);
        $firstPartUniqueId = \SlevomatCodingStandard\Helpers\UseStatement::getUniqueId($type, $nameParts[0]);
        if (\count($nameParts) > 1 && isset($useStatements[$firstPartUniqueId])) {
            return \sprintf('%s%s%s%s', self::NAMESPACE_SEPARATOR, $useStatements[$firstPartUniqueId]->getFullyQualifiedTypeName(), self::NAMESPACE_SEPARATOR, \implode(self::NAMESPACE_SEPARATOR, \array_slice($nameParts, 1)));
        }
        $name = \sprintf('%s%s', self::NAMESPACE_SEPARATOR, $nameAsReferencedInFile);
        $namespaceName = self::findCurrentNamespaceName($phpcsFile, $currentPointer);
        if ($namespaceName !== null) {
            $name = \sprintf('%s%s%s', self::NAMESPACE_SEPARATOR, $namespaceName, $name);
        }
        return $name;
    }
}
