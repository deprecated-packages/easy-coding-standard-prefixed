<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\ClassNotation;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author SpacePossum
 */
final class SingleTraitInsertPerStatementFixer extends \PhpCsFixer\AbstractFixer
{
    public function getDefinition()
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('Each trait `use` must be done as single statement.', [new \PhpCsFixer\FixerDefinition\CodeSample('<?php
final class Example
{
    use Foo, Bar;
}
')]);
    }
    public function getPriority()
    {
        // must be run before Braces and SpaceAfterSemicolonFixer
        return 1;
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isTokenKindFound(\PhpCsFixer\Tokenizer\CT::T_USE_TRAIT);
    }
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        for ($index = \count($tokens) - 1; 1 < $index; --$index) {
            if ($tokens[$index]->isGivenKind(\PhpCsFixer\Tokenizer\CT::T_USE_TRAIT)) {
                $candidates = $this->getCandidates($tokens, $index);
                if (\count($candidates) > 0) {
                    $this->fixTraitUse($tokens, \array_reverse($candidates));
                }
            }
        }
    }
    /**
     * @param int[] $candidates ',' indexes to fix
     */
    private function fixTraitUse(\PhpCsFixer\Tokenizer\Tokens $tokens, array $candidates)
    {
        foreach ($candidates as $nextInsertIndex) {
            $tokens[$nextInsertIndex] = new \PhpCsFixer\Tokenizer\Token(';');
            $tokens->insertAt($nextInsertIndex + 1, new \PhpCsFixer\Tokenizer\Token([\PhpCsFixer\Tokenizer\CT::T_USE_TRAIT, 'use']));
            if (!$tokens[$nextInsertIndex + 2]->isWhitespace()) {
                $tokens->insertAt($nextInsertIndex + 2, new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, ' ']));
            }
        }
    }
    /**
     * @param int $index
     *
     * @return int[]
     */
    private function getCandidates(\PhpCsFixer\Tokenizer\Tokens $tokens, $index)
    {
        $indexes = [];
        $index = $tokens->getNextTokenOfKind($index, [',', ';', '{']);
        while (!$tokens[$index]->equals(';')) {
            if ($tokens[$index]->equals('{')) {
                return [];
                // do not fix use cases with grouping
            }
            $indexes[] = $index;
            $index = $tokens->getNextTokenOfKind($index, [',', ';', '{']);
        }
        return $indexes;
    }
}
