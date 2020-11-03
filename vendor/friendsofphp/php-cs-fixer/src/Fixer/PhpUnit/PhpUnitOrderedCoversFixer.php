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
namespace PhpCsFixer\Fixer\PhpUnit;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Filippo Tessarotto <zoeslam@gmail.com>
 */
final class PhpUnitOrderedCoversFixer extends \PhpCsFixer\AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('Order `@covers` annotation of PHPUnit tests.', [new \PhpCsFixer\FixerDefinition\CodeSample('<?php
/**
 * @covers Foo
 * @covers Bar
 */
final class MyTest extends \\PHPUnit_Framework_TestCase
{}
')]);
    }
    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        // should be run after PhpUnitFqcnAnnotationFixer
        return -10;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isAllTokenKindsFound([\T_CLASS, \T_DOC_COMMENT]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        for ($index = $tokens->count() - 1; $index > 0; --$index) {
            if (!$tokens[$index]->isGivenKind(\T_DOC_COMMENT) || 0 === \PhpCsFixer\Preg::match('/@covers\\s.+@covers\\s/s', $tokens[$index]->getContent())) {
                continue;
            }
            $docBlock = new \PhpCsFixer\DocBlock\DocBlock($tokens[$index]->getContent());
            $covers = $docBlock->getAnnotationsOfType('covers');
            $coversMap = [];
            foreach ($covers as $annotation) {
                $rawContent = $annotation->getContent();
                $comparableContent = \PhpCsFixer\Preg::replace('/\\*\\s*@covers\\s+(.+)/', '\\1', \strtolower(\trim($rawContent)));
                $coversMap[$comparableContent] = $rawContent;
            }
            $orderedCoversMap = $coversMap;
            \ksort($orderedCoversMap, \SORT_STRING);
            if ($orderedCoversMap === $coversMap) {
                continue;
            }
            $lines = $docBlock->getLines();
            foreach (\array_reverse($covers) as $annotation) {
                \array_splice($lines, $annotation->getStart(), $annotation->getEnd() - $annotation->getStart() + 1, \array_pop($orderedCoversMap));
            }
            $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\T_DOC_COMMENT, \implode('', $lines)]);
        }
    }
}
