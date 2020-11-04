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
namespace PhpCsFixer\Fixer\Phpdoc;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class PhpdocAnnotationWithoutDotFixer extends \PhpCsFixer\AbstractFixer
{
    private $tags = ['throws', 'return', 'param', 'internal', 'deprecated', 'var', 'type'];
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('PHPDoc annotation descriptions should not be a sentence.', [new \PhpCsFixer\FixerDefinition\CodeSample('<?php
/**
 * @param string $bar Some string.
 */
function foo ($bar) {}
')]);
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isTokenKindFound(\T_DOC_COMMENT);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(\T_DOC_COMMENT)) {
                continue;
            }
            $doc = new \PhpCsFixer\DocBlock\DocBlock($token->getContent());
            $annotations = $doc->getAnnotations();
            if (empty($annotations)) {
                continue;
            }
            foreach ($annotations as $annotation) {
                if (!$annotation->getTag()->valid() || !\in_array($annotation->getTag()->getName(), $this->tags, \true)) {
                    continue;
                }
                $lineAfterAnnotation = $doc->getLine($annotation->getEnd() + 1);
                if (null !== $lineAfterAnnotation) {
                    $lineAfterAnnotationTrimmed = \ltrim($lineAfterAnnotation->getContent());
                    if ('' === $lineAfterAnnotationTrimmed || '*' !== $lineAfterAnnotationTrimmed[0]) {
                        // malformed PHPDoc, missing asterisk !
                        continue;
                    }
                }
                $content = $annotation->getContent();
                if (1 !== \PhpCsFixer\Preg::match('/[.。]\\h*$/u', $content) || 0 !== \PhpCsFixer\Preg::match('/[.。](?!\\h*$)/u', $content, $matches)) {
                    continue;
                }
                $endLine = $doc->getLine($annotation->getEnd());
                $endLine->setContent(\PhpCsFixer\Preg::replace('/(?<![.。])[.。]\\h*(\\H+)$/u', '\\1', $endLine->getContent()));
                $startLine = $doc->getLine($annotation->getStart());
                $optionalTypeRegEx = $annotation->supportTypes() ? \sprintf('(?:%s\\s+(?:\\$\\w+\\s+)?)?', \preg_quote(\implode('|', $annotation->getTypes()), '/')) : '';
                $content = \PhpCsFixer\Preg::replaceCallback('/^(\\s*\\*\\s*@\\w+\\s+' . $optionalTypeRegEx . ')(\\p{Lu}?(?=\\p{Ll}|\\p{Zs}))(.*)$/', static function (array $matches) {
                    return $matches[1] . \strtolower($matches[2]) . $matches[3];
                }, $startLine->getContent(), 1);
                $startLine->setContent($content);
            }
            $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\T_DOC_COMMENT, $doc->getContent()]);
        }
    }
}