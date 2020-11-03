<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\Commenting;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\Commenting\RemoveSuperfluousDocBlockWhitespaceFixer\RemoveSuperfluousDocBlockWhitespaceFixerTest
 */
final class RemoveSuperfluousDocBlockWhitespaceFixer extends \Symplify\CodingStandard\Fixer\AbstractSymplifyFixer
{
    /**
     * @var string
     * @see https://regex101.com/r/qddAxd/2
     */
    private const EMPTY_LINE_REGEX = '#(?<oneLine>[\\t ]+\\*\\n){2,}#';
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('Block comment should not have 2 empty lines in a row.', []);
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_DOC_COMMENT);
    }
    public function fix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        for ($index = \count($tokens) - 1; $index > 1; --$index) {
            /** @var Token $token */
            $token = $tokens[$index];
            if (!$token->isGivenKind(\T_DOC_COMMENT)) {
                continue;
            }
            $newContent = \_PhpScoper8de082cbb8c7\Nette\Utils\Strings::replace($token->getContent(), self::EMPTY_LINE_REGEX, function (array $match) : string {
                return $match['oneLine'];
            });
            $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\T_DOC_COMMENT, $newContent]);
        }
    }
    public function getPriority() : int
    {
        return $this->getPriorityBefore(\PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer::class);
    }
}
