<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker;

use _PhpScoper069ebd53a518\Nette\Utils\Strings;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
final class MissingVarNameMalformWorker extends \Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\AbstractMalformWorker
{
    /**
     * @var string
     * @see https://regex101.com/r/QtWnWv/3
     */
    private const VAR_WITHOUT_NAME_REGEX = '#^(?<open>\\/\\*\\* @var )(?<type>[\\\\\\w\\|]+)(?<close>\\s+\\*\\/)$#';
    public function work(string $docContent, \PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : string
    {
        if (!\_PhpScoper069ebd53a518\Nette\Utils\Strings::match($docContent, self::VAR_WITHOUT_NAME_REGEX)) {
            return $docContent;
        }
        $nextVariableToken = $this->getNextVariableToken($tokens, $position);
        if ($nextVariableToken === null) {
            return $docContent;
        }
        return \_PhpScoper069ebd53a518\Nette\Utils\Strings::replace($docContent, self::VAR_WITHOUT_NAME_REGEX, function (array $match) use($nextVariableToken) {
            return $match['open'] . $match['type'] . ' ' . $nextVariableToken->getContent() . $match['close'];
        });
    }
    private function getNextVariableToken(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : ?\PhpCsFixer\Tokenizer\Token
    {
        $nextMeaningfulTokenPosition = $tokens->getNextMeaningfulToken($position);
        if ($nextMeaningfulTokenPosition === null) {
            return null;
        }
        $nextToken = $tokens[$nextMeaningfulTokenPosition] ?? null;
        if (!$nextToken instanceof \PhpCsFixer\Tokenizer\Token) {
            return null;
        }
        if (!$nextToken->isGivenKind(\T_VARIABLE)) {
            return null;
        }
        return $nextToken;
    }
}
