<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use function array_merge;
use function array_reverse;
use function count;
use function current;
use function in_array;
use const _PhpScoper9e3283ae8193\T_ANON_CLASS;
use const T_AS;
use const _PhpScoper9e3283ae8193\T_COMMA;
use const T_NAMESPACE;
use const _PhpScoper9e3283ae8193\T_OPEN_PARENTHESIS;
use const T_OPEN_TAG;
use const _PhpScoper9e3283ae8193\T_SEMICOLON;
use const T_STRING;
use const T_USE;
class UseStatementHelper
{
    public static function isAnonymousFunctionUse(\PHP_CodeSniffer\Files\File $phpcsFile, int $usePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $usePointer + 1);
        $nextToken = $tokens[$nextPointer];
        return $nextToken['code'] === \T_OPEN_PARENTHESIS;
    }
    public static function isTraitUse(\PHP_CodeSniffer\Files\File $phpcsFile, int $usePointer) : bool
    {
        $typePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::$typeKeywordTokenCodes, [\T_ANON_CLASS]), $usePointer);
        if ($typePointer !== null) {
            $tokens = $phpcsFile->getTokens();
            $typeToken = $tokens[$typePointer];
            $openerPointer = $typeToken['scope_opener'];
            $closerPointer = $typeToken['scope_closer'];
            return $usePointer > $openerPointer && $usePointer < $closerPointer && !self::isAnonymousFunctionUse($phpcsFile, $usePointer);
        }
        return \false;
    }
    public static function getAlias(\PHP_CodeSniffer\Files\File $phpcsFile, int $usePointer) : ?string
    {
        $endPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_SEMICOLON, \T_COMMA], $usePointer + 1);
        $asPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_AS, $usePointer + 1, $endPointer);
        if ($asPointer === null) {
            return null;
        }
        $tokens = $phpcsFile->getTokens();
        return $tokens[\SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_STRING, $asPointer + 1)]['content'];
    }
    public static function getNameAsReferencedInClassFromUse(\PHP_CodeSniffer\Files\File $phpcsFile, int $usePointer) : string
    {
        $alias = self::getAlias($phpcsFile, $usePointer);
        if ($alias !== null) {
            return $alias;
        }
        $name = self::getFullyQualifiedTypeNameFromUse($phpcsFile, $usePointer);
        return \SlevomatCodingStandard\Helpers\NamespaceHelper::getUnqualifiedNameFromFullyQualifiedName($name);
    }
    public static function getFullyQualifiedTypeNameFromUse(\PHP_CodeSniffer\Files\File $phpcsFile, int $usePointer) : string
    {
        $tokens = $phpcsFile->getTokens();
        $nameEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_SEMICOLON, \T_AS, \T_COMMA], $usePointer + 1) - 1;
        if (\in_array($tokens[$nameEndPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$ineffectiveTokenCodes, \true)) {
            $nameEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $nameEndPointer);
        }
        $nameStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::getNameTokenCodes(), $nameEndPointer - 1) + 1;
        $name = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $nameStartPointer, $nameEndPointer);
        return \SlevomatCodingStandard\Helpers\NamespaceHelper::normalizeToCanonicalName($name);
    }
    /**
     * @param File $phpcsFile
     * @param int $pointer
     * @return array<string, UseStatement>
     */
    public static function getUseStatementsForPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : array
    {
        $allUseStatements = self::getFileUseStatements($phpcsFile);
        if (\count($allUseStatements) === 1) {
            return \current($allUseStatements);
        }
        foreach (\array_reverse($allUseStatements, \true) as $pointerBeforeUseStatements => $useStatements) {
            if ($pointerBeforeUseStatements < $pointer) {
                return $useStatements;
            }
        }
        return [];
    }
    /**
     * @param File $phpcsFile
     * @return array<int, array<string, UseStatement>>
     */
    public static function getFileUseStatements(\PHP_CodeSniffer\Files\File $phpcsFile) : array
    {
        $lazyValue = static function () use($phpcsFile) : array {
            $useStatements = [];
            $tokens = $phpcsFile->getTokens();
            $namespaceAndOpenTagPointers = \SlevomatCodingStandard\Helpers\TokenHelper::findNextAll($phpcsFile, [\T_OPEN_TAG, \T_NAMESPACE], 0);
            $openTagPointer = $namespaceAndOpenTagPointers[0];
            foreach (self::getUseStatementPointers($phpcsFile, $openTagPointer) as $usePointer) {
                $pointerBeforeUseStatements = $openTagPointer;
                if (\count($namespaceAndOpenTagPointers) > 1) {
                    foreach (\array_reverse($namespaceAndOpenTagPointers) as $namespaceAndOpenTagPointer) {
                        if ($namespaceAndOpenTagPointer < $usePointer) {
                            $pointerBeforeUseStatements = $namespaceAndOpenTagPointer;
                            break;
                        }
                    }
                }
                $nextTokenFromUsePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $usePointer + 1);
                $type = \SlevomatCodingStandard\Helpers\UseStatement::TYPE_DEFAULT;
                if ($tokens[$nextTokenFromUsePointer]['code'] === \T_STRING) {
                    if ($tokens[$nextTokenFromUsePointer]['content'] === 'const') {
                        $type = \SlevomatCodingStandard\Helpers\UseStatement::TYPE_CONSTANT;
                    } elseif ($tokens[$nextTokenFromUsePointer]['content'] === 'function') {
                        $type = \SlevomatCodingStandard\Helpers\UseStatement::TYPE_FUNCTION;
                    }
                }
                $name = self::getNameAsReferencedInClassFromUse($phpcsFile, $usePointer);
                $useStatement = new \SlevomatCodingStandard\Helpers\UseStatement($name, self::getFullyQualifiedTypeNameFromUse($phpcsFile, $usePointer), $usePointer, $type, self::getAlias($phpcsFile, $usePointer));
                $useStatements[$pointerBeforeUseStatements][\SlevomatCodingStandard\Helpers\UseStatement::getUniqueId($type, $name)] = $useStatement;
            }
            return $useStatements;
        };
        return \SlevomatCodingStandard\Helpers\SniffLocalCache::getAndSetIfNotCached($phpcsFile, 'useStatements', $lazyValue);
    }
    public static function getUseStatementPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : ?int
    {
        $pointers = self::getUseStatementPointers($phpcsFile, 0);
        foreach (\array_reverse($pointers) as $pointerBeforeUseStatements) {
            if ($pointerBeforeUseStatements < $pointer) {
                return $pointerBeforeUseStatements;
            }
        }
        return null;
    }
    /**
     * Searches for all use statements in a file, skips bodies of classes and traits.
     *
     * @param File $phpcsFile
     * @param int $openTagPointer
     * @return int[]
     */
    private static function getUseStatementPointers(\PHP_CodeSniffer\Files\File $phpcsFile, int $openTagPointer) : array
    {
        $lazy = static function () use($phpcsFile, $openTagPointer) : array {
            $tokens = $phpcsFile->getTokens();
            $pointer = $openTagPointer + 1;
            $pointers = [];
            while (\true) {
                $typesToFind = \array_merge([\T_USE], \SlevomatCodingStandard\Helpers\TokenHelper::$typeKeywordTokenCodes);
                $pointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, $typesToFind, $pointer);
                if ($pointer === null) {
                    break;
                }
                $token = $tokens[$pointer];
                if (\in_array($token['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$typeKeywordTokenCodes, \true)) {
                    $pointer = $token['scope_closer'] + 1;
                    continue;
                }
                if (self::isAnonymousFunctionUse($phpcsFile, $pointer)) {
                    $pointer++;
                    continue;
                }
                $pointers[] = $pointer;
                $pointer++;
            }
            return $pointers;
        };
        return \SlevomatCodingStandard\Helpers\SniffLocalCache::getAndSetIfNotCached($phpcsFile, 'useStatementPointers', $lazy);
    }
}
