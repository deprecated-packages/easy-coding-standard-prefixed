<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker;

use _PhpScoper3e8786a75afe\Nette\Utils\Strings;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
final class SuperfluousVarNameMalformWorker extends \Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\AbstractMalformWorker
{
    /**
     * @var string
     * @see https://regex101.com/r/euhrn8/1
     */
    private const THIS_VARIABLE_REGEX = '#\\$this$#';
    /**
     * @var string
     * @see https://regex101.com/r/8LCnOl/1
     */
    private const VAR_VARIABLE_NAME_REGEX = '#(@var)(?<type>\\s+[|\\\\\\w]+)?(\\s+)(?<propertyName>\\$[\\w]+)#';
    public function work(string $docContent, \PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : string
    {
        if ($this->shouldSkip($tokens, $position)) {
            return $docContent;
        }
        $docBlock = new \PhpCsFixer\DocBlock\DocBlock($docContent);
        $lines = $docBlock->getLines();
        foreach ($lines as $line) {
            $match = \_PhpScoper3e8786a75afe\Nette\Utils\Strings::match($line->getContent(), self::VAR_VARIABLE_NAME_REGEX);
            if ($match === null) {
                continue;
            }
            $newLineContent = \_PhpScoper3e8786a75afe\Nette\Utils\Strings::replace($line->getContent(), self::VAR_VARIABLE_NAME_REGEX, function (array $match) : string {
                $replacement = $match[1];
                if ($match['type'] !== []) {
                    $replacement .= $match['type'];
                }
                if (\_PhpScoper3e8786a75afe\Nette\Utils\Strings::match($match[0], self::THIS_VARIABLE_REGEX)) {
                    return \_PhpScoper3e8786a75afe\Nette\Utils\Strings::replace($match[0], self::THIS_VARIABLE_REGEX, 'self');
                }
                return $replacement;
            });
            $line->setContent($newLineContent);
        }
        return $docBlock->getContent();
    }
    /**
     * Is property doc block?
     */
    private function shouldSkip(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : bool
    {
        $nextMeaningfulTokenPosition = $tokens->getNextMeaningfulToken($position);
        // nothing to change
        if ($nextMeaningfulTokenPosition === null) {
            return \true;
        }
        /** @var Token $nextMeaningfulToken */
        $nextMeaningfulToken = $tokens[$nextMeaningfulTokenPosition];
        // should be protected/private/public/static, to know we're property
        return !$nextMeaningfulToken->isGivenKind([\T_PUBLIC, \T_PROTECTED, \T_PRIVATE, \T_STATIC]);
    }
}
