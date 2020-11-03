<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\Naming;

use _PhpScoper61bdb485188f\Nette\Utils\Strings;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\Naming\StandardizeHereNowDocKeywordFixer\StandardizeHereNowDocKeywordFixerTest
 */
final class StandardizeHereNowDocKeywordFixer extends \Symplify\CodingStandard\Fixer\AbstractSymplifyFixer implements \PhpCsFixer\Fixer\ConfigurableFixerInterface
{
    /**
     * @api
     * @var string
     */
    public const KEYWORD = 'keyword';
    /**
     * @api
     * @var string
     */
    private const DEFAULT_KEYWORD = 'CODE_SAMPLE';
    /**
     * @see https://regex101.com/r/ED2b9V/1
     * @var string
     */
    private const START_HEREDOC_NOWDOC_NAME_REGEX = '#(<<<(\')?)(?<name>.*?)((\')?\\s)#';
    /**
     * @var string
     */
    private $keyword = self::DEFAULT_KEYWORD;
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('Use configured nowdoc and heredoc keyword', []);
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_START_HEREDOC, T_START_NOWDOC]);
    }
    public function fix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        // function arguments, function call parameters, lambda use()
        for ($position = \count($tokens) - 1; $position >= 0; --$position) {
            /** @var Token $token */
            $token = $tokens[$position];
            if ($token->isGivenKind(\T_START_HEREDOC)) {
                $this->fixStartToken($tokens, $token, $position);
            }
            if ($token->isGivenKind(\T_END_HEREDOC)) {
                $this->fixEndToken($tokens, $token, $position);
            }
        }
    }
    /**
     * @param mixed[]|null $configuration
     */
    public function configure(?array $configuration = null) : void
    {
        $this->keyword = $configuration[self::KEYWORD] ?? self::DEFAULT_KEYWORD;
    }
    private function fixStartToken(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Token $token, int $position) : void
    {
        $match = \_PhpScoper61bdb485188f\Nette\Utils\Strings::match($token->getContent(), self::START_HEREDOC_NOWDOC_NAME_REGEX);
        if (!isset($match['name'])) {
            return;
        }
        $newContent = \_PhpScoper61bdb485188f\Nette\Utils\Strings::replace($token->getContent(), self::START_HEREDOC_NOWDOC_NAME_REGEX, '$1' . $this->keyword . '$4');
        $tokens[$position] = new \PhpCsFixer\Tokenizer\Token([$token->getId(), $newContent]);
    }
    private function fixEndToken(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Token $token, int $position) : void
    {
        if ($token->getContent() === $this->keyword) {
            return;
        }
        $tokenContent = $token->getContent();
        $trimmedTokenContent = \trim($tokenContent);
        $spaceEnd = '';
        if (\PHP_VERSION_ID >= 70300 && $tokenContent !== $trimmedTokenContent) {
            $spaceEnd = \substr($tokenContent, 0, \strlen($tokenContent) - \strlen($trimmedTokenContent));
        }
        $tokens[$position] = new \PhpCsFixer\Tokenizer\Token([$token->getId(), $spaceEnd . $this->keyword]);
    }
}
