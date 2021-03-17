<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker;

use _PhpScoper246d3630afdd\Nette\Utils\Strings;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use Symplify\CodingStandard\TokenRunner\Contract\DocBlock\MalformWorkerInterface;
final class DuplicatedArrayMalformWorker implements \Symplify\CodingStandard\TokenRunner\Contract\DocBlock\MalformWorkerInterface
{
    /**
     * @var string
     * @see https://regex101.com/r/wKRh0x/2
     */
    private const IMPLICIT_ARRAY_WITH_ARRAY_LEFT_REGEX = '#((\\w+\\(?\\)?\\[\\])(\\|(.*?))?)\\|array#';
    /**
     * @var string
     * @see https://regex101.com/r/Op8pAz/1
     */
    private const IMPLICIT_ARRAY_WITH_ARRAY_RIGHT_REGEX = '#array\\|((.*?\\|)?(\\w+\\(?\\)?\\[\\]))#';
    /**
     * @param Tokens<Token> $tokens
     */
    public function work(string $docContent, \PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : string
    {
        $docBlock = new \PhpCsFixer\DocBlock\DocBlock($docContent);
        $lines = $docBlock->getLines();
        foreach ($lines as $line) {
            $newContent = \_PhpScoper246d3630afdd\Nette\Utils\Strings::replace($line->getContent(), self::IMPLICIT_ARRAY_WITH_ARRAY_LEFT_REGEX, '$1');
            $newContent = \_PhpScoper246d3630afdd\Nette\Utils\Strings::replace($newContent, self::IMPLICIT_ARRAY_WITH_ARRAY_RIGHT_REGEX, '$1');
            $line->setContent($newContent);
        }
        return $docBlock->getContent();
    }
}
