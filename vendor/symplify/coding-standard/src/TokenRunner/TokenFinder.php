<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner;

use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class TokenFinder
{
    /**
     * @param int|Token $position
     */
    public function getPreviousMeaningfulToken(\PhpCsFixer\Tokenizer\Tokens $tokens, $position) : \PhpCsFixer\Tokenizer\Token
    {
        if (\is_int($position)) {
            return $this->findPreviousTokenByPosition($tokens, $position);
        }
        return $this->findPreviousTokenByToken($tokens, $position);
    }
    private function findPreviousTokenByPosition(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : \PhpCsFixer\Tokenizer\Token
    {
        $previousPosition = $position - 1;
        if (!isset($tokens[$previousPosition])) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        $previousToken = $tokens[$previousPosition];
        if (!$previousToken instanceof \PhpCsFixer\Tokenizer\Token) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return $previousToken;
    }
    private function findPreviousTokenByToken(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Token $positionToken) : \PhpCsFixer\Tokenizer\Token
    {
        $position = $this->resolvePositionByToken($tokens, $positionToken);
        return $this->findPreviousTokenByPosition($tokens, $position - 1);
    }
    private function resolvePositionByToken(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Token $positionToken) : int
    {
        foreach ($tokens as $position => $token) {
            if ($token === $positionToken) {
                return $position;
            }
        }
        throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
    }
}
