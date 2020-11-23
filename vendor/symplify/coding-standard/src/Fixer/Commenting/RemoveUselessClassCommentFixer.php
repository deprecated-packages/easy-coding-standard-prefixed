<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\Commenting;

use _PhpScoperd4c5032f0671\Nette\Utils\Strings;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\Commenting\RemoveUselessClassCommentFixer\RemoveUselessClassCommentFixerTest
 */
final class RemoveUselessClassCommentFixer extends \Symplify\CodingStandard\Fixer\AbstractSymplifyFixer implements \Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface
{
    /**
     * @see https://regex101.com/r/RzTdFH/4
     * @var string
     */
    private const COMMENT_CLASS_REGEX = '#(\\/\\*{2}\\s+?)?(\\*|\\/\\/)\\s+[cC]lass\\s+[^\\s]*(\\s+\\*\\/)?$#';
    /**
     * @see https://regex101.com/r/bzbxXz/2
     * @var string
     */
    private const COMMENT_CONSTRUCTOR_CLASS_REGEX = '#^\\s{0,}(\\/\\*{2}\\s+?)?(\\*|\\/\\/)\\s+[^\\s]*\\s+[Cc]onstructor\\.?(\\s+\\*\\/)?$#';
    /**
     * @see https://regex101.com/r/S1wAAh/2
     * @var string
     */
    private const COMMENT_METHOD_CLASS_REGEX = '#^\\s{0,}(\\/\\*{2}\\s+?)?(\\*|\\/\\/)\\s+([Gg]et|[Ss]et)\\s+[^\\s]*\\.?(\\s+\\*\\/)?$#';
    /**
     * @see https://regex101.com/r/eBux3I/1
     * @var string
     */
    private const COMMENT_ANY_METHOD_CLASS_REGEX = '#^\\s{0,}(\\/\\*{2}\\s+?)?(\\*|\\/\\/)\\s+(([Gg]et|[Ss]et)\\s+(.*))(\\s+\\*\\/)?$#';
    /**
     * @see https://regex101.com/r/QeAiRV/1
     * @var string
     */
    private const SPACE_STAR_SLASH_REGEX = '#[\\s\\*\\/]#';
    /**
     * @var string
     */
    private const ERROR_MESSAGE = 'Remove useless "// Class <Some>" or "// <Some> Constructor." comment';
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition(self::ERROR_MESSAGE, []);
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_DOC_COMMENT, \T_COMMENT]);
    }
    public function fix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $reverseTokens = $this->reverseTokens($tokens);
        foreach ($reverseTokens as $index => $token) {
            if (!$token->isGivenKind([\T_DOC_COMMENT, \T_COMMENT])) {
                continue;
            }
            $originalDocContent = $token->getContent();
            $cleanedDocContent = \_PhpScoperd4c5032f0671\Nette\Utils\Strings::replace($originalDocContent, self::COMMENT_CLASS_REGEX, '');
            $cleanedDocContent = \_PhpScoperd4c5032f0671\Nette\Utils\Strings::replace($cleanedDocContent, self::COMMENT_CONSTRUCTOR_CLASS_REGEX, '');
            $cleanedDocContent = \_PhpScoperd4c5032f0671\Nette\Utils\Strings::replace($cleanedDocContent, self::COMMENT_METHOD_CLASS_REGEX, '');
            $cleanedDocContent = $this->cleanClassMethodCommentMimicMethodName($cleanedDocContent, $reverseTokens, $index);
            if ($cleanedDocContent !== '') {
                continue;
            }
            // remove token
            $tokens->clearAt($index);
        }
    }
    public function getRuleDefinition() : \Symplify\RuleDocGenerator\ValueObject\RuleDefinition
    {
        return new \Symplify\RuleDocGenerator\ValueObject\RuleDefinition(self::ERROR_MESSAGE, [new \Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample(<<<'CODE_SAMPLE'
/**
 * class SomeClass
 */
class SomeClass
{
    /**
     * SomeClass Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get Translator
     */
    public function getTranslator()
    {
    }

    /**
     * Get normal translator
     */
	public function getNormalTranslator()
	{

	}
}
CODE_SAMPLE
, <<<'CODE_SAMPLE'
class SomeClass
{
    public function __construct()
    {
    }

    public function getTranslator()
    {
    }

    public function getNormalTranslator()
    {
    }
}
CODE_SAMPLE
)]);
    }
    private function cleanClassMethodCommentMimicMethodName(string $cleanedDocContent, array $reverseTokens, int $index) : string
    {
        $matchMethodClass = \_PhpScoperd4c5032f0671\Nette\Utils\Strings::match($cleanedDocContent, self::COMMENT_METHOD_CLASS_REGEX);
        if (!$matchMethodClass && $this->isNextFunction($reverseTokens, $index)) {
            $matchAnyMethodClass = \_PhpScoperd4c5032f0671\Nette\Utils\Strings::match($cleanedDocContent, self::COMMENT_ANY_METHOD_CLASS_REGEX);
            if ($matchAnyMethodClass && \strtolower(\_PhpScoperd4c5032f0671\Nette\Utils\Strings::replace($matchAnyMethodClass[3], self::SPACE_STAR_SLASH_REGEX, '')) === \strtolower($reverseTokens[$index + 6]->getContent())) {
                return \_PhpScoperd4c5032f0671\Nette\Utils\Strings::replace($cleanedDocContent, self::COMMENT_ANY_METHOD_CLASS_REGEX, '');
            }
        }
        return $cleanedDocContent;
    }
    private function isNextFunction(array $reverseTokens, int $index) : bool
    {
        return isset($reverseTokens[$index + 4]) && $reverseTokens[$index + 4]->getContent() === 'function';
    }
}
