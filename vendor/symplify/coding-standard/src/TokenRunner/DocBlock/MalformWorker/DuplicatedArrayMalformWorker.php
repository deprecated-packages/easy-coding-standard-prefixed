<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker;

use _PhpScoperedc2e0c967db\Nette\Utils\Strings;
use PhpCsFixer\DocBlock\DocBlock;
use PhpCsFixer\Tokenizer\Tokens;
final class DuplicatedArrayMalformWorker extends \Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\AbstractMalformWorker
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
    public function work(string $docContent, \PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : string
    {
        $docBlock = new \PhpCsFixer\DocBlock\DocBlock($docContent);
        $lines = $docBlock->getLines();
        foreach ($lines as $line) {
            $newContent = \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($line->getContent(), self::IMPLICIT_ARRAY_WITH_ARRAY_LEFT_REGEX, '$1');
            $newContent = \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($newContent, self::IMPLICIT_ARRAY_WITH_ARRAY_RIGHT_REGEX, '$1');
            $line->setContent($newContent);
        }
        return $docBlock->getContent();
    }
}
