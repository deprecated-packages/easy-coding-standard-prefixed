<?php

namespace Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker;

use ECSPrefix20210507\Nette\Utils\Strings;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use Symplify\CodingStandard\TokenRunner\Contract\DocBlock\MalformWorkerInterface;
final class MissingVarNameMalformWorker implements MalformWorkerInterface
{
    /**
     * @var string
     * @see https://regex101.com/r/QtWnWv/3
     */
    const VAR_WITHOUT_NAME_REGEX = '#^(?<open>\\/\\*\\* @var )(?<type>[\\\\\\w\\|]+)(?<close>\\s+\\*\\/)$#';
    /**
     * @param Tokens<Token> $tokens
     * @param string $docContent
     * @param int $position
     * @return string
     */
    public function work($docContent, $tokens, $position)
    {
        if (!Strings::match($docContent, self::VAR_WITHOUT_NAME_REGEX)) {
            return $docContent;
        }
        $nextVariableToken = $this->getNextVariableToken($tokens, $position);
        if (!$nextVariableToken instanceof Token) {
            return $docContent;
        }
        return Strings::replace($docContent, self::VAR_WITHOUT_NAME_REGEX, function (array $match) use($nextVariableToken) : string {
            return $match['open'] . $match['type'] . ' ' . $nextVariableToken->getContent() . $match['close'];
        });
    }
    /**
     * @param Tokens<Token> $tokens
     * @return \PhpCsFixer\Tokenizer\Token|null
     * @param int $position
     */
    private function getNextVariableToken($tokens, $position)
    {
        $nextMeaningfulTokenPosition = $tokens->getNextMeaningfulToken($position);
        if ($nextMeaningfulTokenPosition === null) {
            return null;
        }
        $nextToken = isset($tokens[$nextMeaningfulTokenPosition]) ? $tokens[$nextMeaningfulTokenPosition] : null;
        if (!$nextToken instanceof Token) {
            return null;
        }
        if (!$nextToken->isGivenKind(\T_VARIABLE)) {
            return null;
        }
        return $nextToken;
    }
}
