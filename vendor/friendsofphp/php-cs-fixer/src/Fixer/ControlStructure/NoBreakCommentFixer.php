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
namespace PhpCsFixer\Fixer\ControlStructure;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface;
use PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use _PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use _PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Options;
/**
 * Fixer for rule defined in PSR2 ¶5.2.
 */
final class NoBreakCommentFixer extends \PhpCsFixer\AbstractFixer implements \PhpCsFixer\Fixer\ConfigurationDefinitionFixerInterface, \PhpCsFixer\Fixer\WhitespacesAwareFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('There must be a comment when fall-through is intentional in a non-empty case body.', [new \PhpCsFixer\FixerDefinition\CodeSample('<?php
switch ($foo) {
    case 1:
        foo();
    case 2:
        bar();
        // no break
        break;
    case 3:
        baz();
}
')], 'Adds a "no break" comment before fall-through cases, and removes it if there is no fall-through.');
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isAnyTokenKindsFound([\T_CASE, \T_DEFAULT]);
    }
    /**
     * {@inheritdoc}
     */
    protected function createConfigurationDefinition()
    {
        return new \PhpCsFixer\FixerConfiguration\FixerConfigurationResolver([(new \PhpCsFixer\FixerConfiguration\FixerOptionBuilder('comment_text', 'The text to use in the added comment and to detect it.'))->setAllowedTypes(['string'])->setAllowedValues([static function ($value) {
            if (\is_string($value) && \PhpCsFixer\Preg::match('/\\R/', $value)) {
                throw new \_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException('The comment text must not contain new lines.');
            }
            return \true;
        }])->setNormalizer(static function (\_PhpScoperb383f16e851e\Symfony\Component\OptionsResolver\Options $options, $value) {
            return \rtrim($value);
        })->setDefault('no break')->getOption()]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        for ($position = \count($tokens) - 1; $position >= 0; --$position) {
            if ($tokens[$position]->isGivenKind([\T_CASE, \T_DEFAULT])) {
                $this->fixCase($tokens, $position);
            }
        }
    }
    /**
     * @param int $casePosition
     */
    private function fixCase(\PhpCsFixer\Tokenizer\Tokens $tokens, $casePosition)
    {
        $empty = \true;
        $fallThrough = \true;
        $commentPosition = null;
        for ($i = $tokens->getNextTokenOfKind($casePosition, [':', ';']) + 1, $max = \count($tokens); $i < $max; ++$i) {
            if ($tokens[$i]->isGivenKind([\T_SWITCH, \T_IF, \T_ELSE, \T_ELSEIF, \T_FOR, \T_FOREACH, \T_WHILE, \T_DO, \T_FUNCTION, \T_CLASS])) {
                $empty = \false;
                $i = $this->getStructureEnd($tokens, $i);
                continue;
            }
            if ($tokens[$i]->isGivenKind([\T_BREAK, \T_CONTINUE, \T_RETURN, \T_EXIT, \T_THROW, \T_GOTO])) {
                $fallThrough = \false;
                continue;
            }
            if ($tokens[$i]->equals('}') || $tokens[$i]->isGivenKind(\T_ENDSWITCH)) {
                if (null !== $commentPosition) {
                    $this->removeComment($tokens, $commentPosition);
                }
                break;
            }
            if ($this->isNoBreakComment($tokens[$i])) {
                $commentPosition = $i;
                continue;
            }
            if ($tokens[$i]->isGivenKind([\T_CASE, \T_DEFAULT])) {
                if (!$empty && $fallThrough) {
                    if (null !== $commentPosition && $tokens->getPrevNonWhitespace($i) !== $commentPosition) {
                        $this->removeComment($tokens, $commentPosition);
                        $commentPosition = null;
                    }
                    if (null === $commentPosition) {
                        $this->insertCommentAt($tokens, $i);
                    } else {
                        $text = $this->configuration['comment_text'];
                        $tokens[$commentPosition] = new \PhpCsFixer\Tokenizer\Token([$tokens[$commentPosition]->getId(), \str_ireplace($text, $text, $tokens[$commentPosition]->getContent())]);
                        $this->ensureNewLineAt($tokens, $commentPosition);
                    }
                } elseif (null !== $commentPosition) {
                    $this->removeComment($tokens, $commentPosition);
                }
                break;
            }
            if (!$tokens[$i]->isGivenKind([\T_COMMENT, \T_WHITESPACE])) {
                $empty = \false;
            }
        }
    }
    /**
     * @return bool
     */
    private function isNoBreakComment(\PhpCsFixer\Tokenizer\Token $token)
    {
        if (!$token->isComment()) {
            return \false;
        }
        $text = \preg_quote($this->configuration['comment_text'], '~');
        return 1 === \PhpCsFixer\Preg::match("~^((//|#)\\s*{$text}\\s*)|(/\\*\\*?\\s*{$text}\\s*\\*/)\$~i", $token->getContent());
    }
    /**
     * @param int $casePosition
     */
    private function insertCommentAt(\PhpCsFixer\Tokenizer\Tokens $tokens, $casePosition)
    {
        $lineEnding = $this->whitespacesConfig->getLineEnding();
        $newlinePosition = $this->ensureNewLineAt($tokens, $casePosition);
        $newlineToken = $tokens[$newlinePosition];
        $nbNewlines = \substr_count($newlineToken->getContent(), $lineEnding);
        if ($newlineToken->isGivenKind(\T_OPEN_TAG) && \PhpCsFixer\Preg::match('/\\R/', $newlineToken->getContent())) {
            ++$nbNewlines;
        } elseif ($tokens[$newlinePosition - 1]->isGivenKind(\T_OPEN_TAG) && \PhpCsFixer\Preg::match('/\\R/', $tokens[$newlinePosition - 1]->getContent())) {
            ++$nbNewlines;
            if (!\PhpCsFixer\Preg::match('/\\R/', $newlineToken->getContent())) {
                $tokens[$newlinePosition] = new \PhpCsFixer\Tokenizer\Token([$newlineToken->getId(), $lineEnding . $newlineToken->getContent()]);
            }
        }
        if ($nbNewlines > 1) {
            \PhpCsFixer\Preg::match('/^(.*?)(\\R[ \\t]*)$/s', $newlineToken->getContent(), $matches);
            $indent = $this->getIndentAt($tokens, $newlinePosition - 1);
            $tokens[$newlinePosition] = new \PhpCsFixer\Tokenizer\Token([$newlineToken->getId(), $matches[1] . $lineEnding . $indent]);
            $tokens->insertAt(++$newlinePosition, new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $matches[2]]));
        }
        $tokens->insertAt($newlinePosition, new \PhpCsFixer\Tokenizer\Token([\T_COMMENT, '// ' . $this->configuration['comment_text']]));
        $this->ensureNewLineAt($tokens, $newlinePosition);
    }
    /**
     * @param int $position
     *
     * @return int The newline token position
     */
    private function ensureNewLineAt(\PhpCsFixer\Tokenizer\Tokens $tokens, $position)
    {
        $lineEnding = $this->whitespacesConfig->getLineEnding();
        $content = $lineEnding . $this->getIndentAt($tokens, $position);
        $whitespaceToken = $tokens[$position - 1];
        if (!$whitespaceToken->isGivenKind(\T_WHITESPACE)) {
            if ($whitespaceToken->isGivenKind(\T_OPEN_TAG)) {
                $content = \PhpCsFixer\Preg::replace('/\\R/', '', $content);
                if (!\PhpCsFixer\Preg::match('/\\R/', $whitespaceToken->getContent())) {
                    $tokens[$position - 1] = new \PhpCsFixer\Tokenizer\Token([\T_OPEN_TAG, \PhpCsFixer\Preg::replace('/\\s+$/', $lineEnding, $whitespaceToken->getContent())]);
                }
            }
            if ('' !== $content) {
                $tokens->insertAt($position, new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $content]));
                return $position;
            }
            return $position - 1;
        }
        if ($tokens[$position - 2]->isGivenKind(\T_OPEN_TAG) && \PhpCsFixer\Preg::match('/\\R/', $tokens[$position - 2]->getContent())) {
            $content = \PhpCsFixer\Preg::replace('/^\\R/', '', $content);
        }
        if (!\PhpCsFixer\Preg::match('/\\R/', $whitespaceToken->getContent())) {
            $tokens[$position - 1] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $content]);
        }
        return $position - 1;
    }
    /**
     * @param int $commentPosition
     */
    private function removeComment(\PhpCsFixer\Tokenizer\Tokens $tokens, $commentPosition)
    {
        if ($tokens[$tokens->getPrevNonWhitespace($commentPosition)]->isGivenKind(\T_OPEN_TAG)) {
            $whitespacePosition = $commentPosition + 1;
            $regex = '/^\\R[ \\t]*/';
        } else {
            $whitespacePosition = $commentPosition - 1;
            $regex = '/\\R[ \\t]*$/';
        }
        $whitespaceToken = $tokens[$whitespacePosition];
        if ($whitespaceToken->isGivenKind(\T_WHITESPACE)) {
            $content = \PhpCsFixer\Preg::replace($regex, '', $whitespaceToken->getContent());
            if ('' !== $content) {
                $tokens[$whitespacePosition] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $content]);
            } else {
                $tokens->clearAt($whitespacePosition);
            }
        }
        $tokens->clearTokenAndMergeSurroundingWhitespace($commentPosition);
    }
    /**
     * @param int $position
     *
     * @return string
     */
    private function getIndentAt(\PhpCsFixer\Tokenizer\Tokens $tokens, $position)
    {
        while (\true) {
            $position = $tokens->getPrevTokenOfKind($position, [[\T_WHITESPACE]]);
            if (null === $position) {
                break;
            }
            $content = $tokens[$position]->getContent();
            $prevToken = $tokens[$position - 1];
            if ($prevToken->isGivenKind(\T_OPEN_TAG) && \PhpCsFixer\Preg::match('/\\R$/', $prevToken->getContent())) {
                $content = $this->whitespacesConfig->getLineEnding() . $content;
            }
            if (\PhpCsFixer\Preg::match('/\\R([ \\t]*)$/', $content, $matches)) {
                return $matches[1];
            }
        }
        return '';
    }
    /**
     * @param int $position
     *
     * @return int
     */
    private function getStructureEnd(\PhpCsFixer\Tokenizer\Tokens $tokens, $position)
    {
        $initialToken = $tokens[$position];
        if ($initialToken->isGivenKind([\T_FOR, \T_FOREACH, \T_WHILE, \T_IF, \T_ELSEIF, \T_SWITCH, \T_FUNCTION])) {
            $position = $tokens->findBlockEnd(\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $tokens->getNextTokenOfKind($position, ['(']));
        } elseif ($initialToken->isGivenKind(\T_CLASS)) {
            $openParenthesisPosition = $tokens->getNextMeaningfulToken($position);
            if ('(' === $tokens[$openParenthesisPosition]->getContent()) {
                $position = $tokens->findBlockEnd(\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $openParenthesisPosition);
            }
        }
        $position = $tokens->getNextMeaningfulToken($position);
        if ('{' !== $tokens[$position]->getContent()) {
            return $tokens->getNextTokenOfKind($position, [';']);
        }
        $position = $tokens->findBlockEnd(\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_CURLY_BRACE, $position);
        if ($initialToken->isGivenKind(\T_DO)) {
            $position = $tokens->findBlockEnd(\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $tokens->getNextTokenOfKind($position, ['(']));
            return $tokens->getNextTokenOfKind($position, [';']);
        }
        return $position;
    }
}