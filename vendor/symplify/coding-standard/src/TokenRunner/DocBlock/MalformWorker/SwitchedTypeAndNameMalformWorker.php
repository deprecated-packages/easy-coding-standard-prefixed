<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker;

use _PhpScoperc7096eb2567d\Nette\Utils\Strings;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use Symplify\CodingStandard\TokenRunner\Contract\DocBlock\MalformWorkerInterface;
final class SwitchedTypeAndNameMalformWorker implements \Symplify\CodingStandard\TokenRunner\Contract\DocBlock\MalformWorkerInterface
{
    /**
     * @var string
     * @see https://regex101.com/r/Ie89ks/2
     */
    private const NAME_THEN_TYPE_REGEX = '#@(param|var)(\\s+)(?<name>\\$\\w+)(\\s+)(?<type>[|\\\\\\w\\[\\]]+)#';
    /**
     * @param Tokens<Token> $tokens
     */
    public function work(string $docContent, \PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : string
    {
        $docBlock = new \PhpCsFixer\DocBlock\DocBlock($docContent);
        $lines = $docBlock->getLines();
        foreach ($lines as $line) {
            // $value is first, instead of type is first
            $match = \_PhpScoperc7096eb2567d\Nette\Utils\Strings::match($line->getContent(), self::NAME_THEN_TYPE_REGEX);
            if ($match === null) {
                continue;
            }
            if ($match['name'] === '') {
                continue;
            }
            if ($match['type'] === '') {
                continue;
            }
            // skip random words that look like type without autolaoding
            if (\in_array($match['type'], ['The', 'Set'], \true)) {
                continue;
            }
            $newLine = \_PhpScoperc7096eb2567d\Nette\Utils\Strings::replace($line->getContent(), self::NAME_THEN_TYPE_REGEX, '@$1$2$5$4$3');
            $line->setContent($newLine);
        }
        return $docBlock->getContent();
    }
}
