<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner;

use _PhpScoper5384d7276e1f\Nette\Utils\Strings;
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
    /**
     * @param mixed[] $tokens
     * @return mixed[]|string|null
     */
    public function getNextMeaninfulToken(array $tokens, int $position)
    {
        $tokens = $this->getNextMeaninfulTokens($tokens, $position, 1);
        return $tokens[0] ?? null;
    }
    /**
     * @param mixed[] $tokens
     * @return mixed[]
     */
    public function getNextMeaninfulTokens(array $tokens, int $position, int $count) : array
    {
        $foundTokens = [];
        for ($i = $position; $i < \count($tokens); ++$i) {
            $token = $tokens[$i];
            if ($token[0] === \T_WHITESPACE) {
                continue;
            }
            if (\count($foundTokens) === $count) {
                break;
            }
            $foundTokens[] = $token;
        }
        return $foundTokens;
    }
    /**
     * @param mixed[] $rawTokens
     * @return mixed[]|string
     */
    public function getSameRowLastToken(array $rawTokens, int $position)
    {
        $lastToken = null;
        for ($i = $position; $i < \count($rawTokens); ++$i) {
            $token = $rawTokens[$i];
            if (\is_array($token) && \_PhpScoper5384d7276e1f\Nette\Utils\Strings::contains($token[1], \PHP_EOL)) {
                break;
            }
            $lastToken = $token;
        }
        return $lastToken;
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
