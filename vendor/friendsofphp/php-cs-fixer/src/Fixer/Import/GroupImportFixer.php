<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\Import;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\FixerDefinition\VersionSpecification;
use PhpCsFixer\FixerDefinition\VersionSpecificCodeSample;
use PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis;
use PhpCsFixer\Tokenizer\Analyzer\NamespaceUsesAnalyzer;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Volodymyr Kupriienko <vldmr.kuprienko@gmail.com>
 */
final class GroupImportFixer extends \PhpCsFixer\AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('There MUST be group use for the same namespaces.', [new \PhpCsFixer\FixerDefinition\VersionSpecificCodeSample("<?php\nuse Foo\\Bar;\nuse Foo\\Baz;\n", new \PhpCsFixer\FixerDefinition\VersionSpecification(70000))]);
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return \PHP_VERSION_ID >= 70000 && $tokens->isTokenKindFound(\T_USE);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $useWithSameNamespaces = $this->getSameNamespaces($tokens);
        if ([] === $useWithSameNamespaces) {
            return;
        }
        $this->removeSingleUseStatements($useWithSameNamespaces, $tokens);
        $this->addGroupUseStatements($useWithSameNamespaces, $tokens);
    }
    /**
     * Gets namespace use analyzers with same namespaces.
     *
     * @return NamespaceUseAnalysis[]
     */
    private function getSameNamespaces(\PhpCsFixer\Tokenizer\Tokens $tokens) : array
    {
        $useDeclarations = (new \PhpCsFixer\Tokenizer\Analyzer\NamespaceUsesAnalyzer())->getDeclarationsFromTokens($tokens);
        if (0 === \count($useDeclarations)) {
            return [];
        }
        $allNamespaces = \array_map(function (\PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration) {
            return $this->getNamespaceNameWithSlash($useDeclaration);
        }, $useDeclarations);
        $sameNamespaces = \array_filter(\array_count_values($allNamespaces), function (int $count) {
            return $count > 1;
        });
        $sameNamespaces = \array_keys($sameNamespaces);
        $sameNamespaceAnalysis = \array_filter($useDeclarations, function (\PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration) use($sameNamespaces) {
            $namespaceName = $this->getNamespaceNameWithSlash($useDeclaration);
            return \in_array($namespaceName, $sameNamespaces, \true);
        });
        \sort($sameNamespaceAnalysis);
        return $sameNamespaceAnalysis;
    }
    /**
     * @param NamespaceUseAnalysis[] $statements
     */
    private function removeSingleUseStatements(array $statements, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        foreach ($statements as $useDeclaration) {
            $index = $useDeclaration->getStartIndex();
            $endIndex = $useDeclaration->getEndIndex();
            $useStatementTokens = [\T_USE, \T_WHITESPACE, \T_STRING, \T_NS_SEPARATOR, \T_AS, \PhpCsFixer\Tokenizer\CT::T_CONST_IMPORT, \PhpCsFixer\Tokenizer\CT::T_FUNCTION_IMPORT];
            while ($index !== $endIndex) {
                if ($tokens[$index]->isGivenKind($useStatementTokens)) {
                    $tokens->clearAt($index);
                }
                ++$index;
            }
            if (isset($tokens[$index]) && $tokens[$index]->equals(';')) {
                $tokens->clearAt($index);
            }
            ++$index;
            if (isset($tokens[$index]) && $tokens[$index]->isGivenKind(\T_WHITESPACE)) {
                $tokens->clearAt($index);
            }
        }
    }
    /**
     * @param NamespaceUseAnalysis[] $statements
     */
    private function addGroupUseStatements(array $statements, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $currentNamespace = '';
        $insertIndex = \array_slice($statements, -1)[0]->getEndIndex();
        while ($tokens[$insertIndex]->isGivenKind([\T_COMMENT, \T_DOC_COMMENT])) {
            ++$insertIndex;
        }
        foreach ($statements as $index => $useDeclaration) {
            $namespace = $this->getNamespaceNameWithSlash($useDeclaration);
            if ($currentNamespace !== $namespace) {
                if ($index > 1) {
                    ++$insertIndex;
                }
                $currentNamespace = $namespace;
                $insertIndex += $this->createNewGroup($tokens, $insertIndex, $useDeclaration, $currentNamespace);
            } else {
                $newTokens = [new \PhpCsFixer\Tokenizer\Token(','), new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, ' '])];
                if ($useDeclaration->isAliased()) {
                    $tokens->insertAt($insertIndex + 1, $newTokens);
                    $insertIndex += \count($newTokens);
                    $newTokens = [];
                    $insertIndex += $this->insertToGroupUseWithAlias($tokens, $insertIndex + 1, $useDeclaration);
                }
                $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\T_STRING, $useDeclaration->getShortName()]);
                if (!isset($statements[$index + 1]) || $this->getNamespaceNameWithSlash($statements[$index + 1]) !== $currentNamespace) {
                    $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\PhpCsFixer\Tokenizer\CT::T_GROUP_IMPORT_BRACE_CLOSE, '}']);
                    $newTokens[] = new \PhpCsFixer\Tokenizer\Token(';');
                    $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, "\n"]);
                }
                $tokens->insertAt($insertIndex + 1, $newTokens);
                $insertIndex += \count($newTokens);
            }
        }
    }
    private function getNamespaceNameWithSlash(\PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration) : string
    {
        return \substr($useDeclaration->getFullName(), 0, \strripos($useDeclaration->getFullName(), '\\') + 1);
    }
    /**
     * Insert use with alias to the group.
     */
    private function insertToGroupUseWithAlias(\PhpCsFixer\Tokenizer\Tokens $tokens, int $insertIndex, \PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration) : int
    {
        $newTokens = [new \PhpCsFixer\Tokenizer\Token([\T_STRING, \substr($useDeclaration->getFullName(), \strripos($useDeclaration->getFullName(), '\\') + 1)]), new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, ' ']), new \PhpCsFixer\Tokenizer\Token([\T_AS, 'as']), new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, ' '])];
        $tokens->insertAt($insertIndex, $newTokens);
        return \count($newTokens);
    }
    /**
     * Creates new use statement group.
     */
    private function createNewGroup(\PhpCsFixer\Tokenizer\Tokens $tokens, int $insertIndex, \PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration, string $currentNamespace) : int
    {
        $insertedTokens = 0;
        if (\count($tokens) === $insertIndex) {
            $tokens->setSize($insertIndex + 1);
        }
        $newTokens = [new \PhpCsFixer\Tokenizer\Token([\T_USE, 'use']), new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, ' '])];
        if ($useDeclaration->isFunction() || $useDeclaration->isConstant()) {
            $importStatementParams = $useDeclaration->isFunction() ? [\PhpCsFixer\Tokenizer\CT::T_FUNCTION_IMPORT, 'function'] : [\PhpCsFixer\Tokenizer\CT::T_CONST_IMPORT, 'const'];
            $newTokens[] = new \PhpCsFixer\Tokenizer\Token($importStatementParams);
            $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, ' ']);
        }
        $namespaceParts = \array_filter(\explode('\\', $currentNamespace));
        foreach ($namespaceParts as $part) {
            $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\T_STRING, $part]);
            $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\T_NS_SEPARATOR, '\\']);
        }
        $newTokens[] = new \PhpCsFixer\Tokenizer\Token([\PhpCsFixer\Tokenizer\CT::T_GROUP_IMPORT_BRACE_OPEN, '{']);
        $newTokensCount = \count($newTokens);
        $tokens->insertAt($insertIndex, $newTokens);
        $insertedTokens += $newTokensCount;
        $insertIndex += $newTokensCount;
        if ($useDeclaration->isAliased()) {
            $inserted = $this->insertToGroupUseWithAlias($tokens, $insertIndex + 1, $useDeclaration);
            $insertedTokens += $inserted;
            $insertIndex += $inserted;
        }
        $tokens->insertAt($insertIndex + 1, new \PhpCsFixer\Tokenizer\Token([\T_STRING, $useDeclaration->getShortName()]));
        ++$insertedTokens;
        return $insertedTokens;
    }
}
