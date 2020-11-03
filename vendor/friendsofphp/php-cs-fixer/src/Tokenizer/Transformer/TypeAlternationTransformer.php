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
namespace PhpCsFixer\Tokenizer\Transformer;

use PhpCsFixer\Tokenizer\AbstractTransformer;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * Transform `|` operator into CT::T_TYPE_ALTERNATION in `} catch (ExceptionType1 | ExceptionType2 $e) {`.
 *
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class TypeAlternationTransformer extends \PhpCsFixer\Tokenizer\AbstractTransformer
{
    /**
     * {@inheritdoc}
     */
    public function getCustomTokens()
    {
        return [\PhpCsFixer\Tokenizer\CT::T_TYPE_ALTERNATION];
    }
    /**
     * {@inheritdoc}
     */
    public function getRequiredPhpVersionId()
    {
        return 70100;
    }
    /**
     * {@inheritdoc}
     */
    public function process(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Token $token, $index)
    {
        if (!$token->equals('|')) {
            return;
        }
        $prevIndex = $tokens->getPrevMeaningfulToken($index);
        $prevToken = $tokens[$prevIndex];
        if (!$prevToken->isGivenKind(\T_STRING)) {
            return;
        }
        do {
            $prevIndex = $tokens->getPrevMeaningfulToken($prevIndex);
            if (null === $prevIndex) {
                break;
            }
            $prevToken = $tokens[$prevIndex];
            if ($prevToken->isGivenKind([\T_NS_SEPARATOR, \T_STRING])) {
                continue;
            }
            if ($prevToken->isGivenKind(\PhpCsFixer\Tokenizer\CT::T_TYPE_ALTERNATION) || $prevToken->equals('(') && $tokens[$tokens->getPrevMeaningfulToken($prevIndex)]->isGivenKind(\T_CATCH)) {
                $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\PhpCsFixer\Tokenizer\CT::T_TYPE_ALTERNATION, '|']);
            }
            break;
        } while (\true);
    }
}
