<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\Commenting;

use _PhpScopercf327c47dfc5\Nette\Utils\Strings;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\CodingStandard\TokenRunner\Contract\DocBlock\MalformWorkerInterface;
use Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\InlineVarMalformWorker;
use Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\MissingParamNameMalformWorker;
use Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\ParamNameTypoMalformWorker;
use Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\SuperfluousReturnNameMalformWorker;
use Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\SuperfluousVarNameMalformWorker;
use Symplify\CodingStandard\TokenRunner\DocBlock\MalformWorker\SwitchedTypeAndNameMalformWorker;
/**
 * @see ParamNameTypoMalformWorker
 * @see InlineVarMalformWorker
 * @see MissingParamNameMalformWorker
 * @see SwitchedTypeAndNameMalformWorker
 * @see SuperfluousReturnNameMalformWorker
 * @see SuperfluousVarNameMalformWorker
 *
 * @see \Symplify\CodingStandard\Tests\Fixer\Commenting\ParamReturnAndVarTagMalformsFixer\ParamReturnAndVarTagMalformsFixerTest
 */
final class ParamReturnAndVarTagMalformsFixer extends \Symplify\CodingStandard\Fixer\AbstractSymplifyFixer
{
    /**
     * @var string
     * @see https://regex101.com/r/8iqNuR/1
     */
    private const TYPE_ANNOTATION_REGEX = '#@(param|return|var)#';
    /**
     * @var MalformWorkerInterface[]
     */
    private $malformWorkers = [];
    /**
     * @param MalformWorkerInterface[] $malformWorkers
     */
    public function __construct(array $malformWorkers)
    {
        $this->malformWorkers = $malformWorkers;
    }
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('The @param, @return, @var and inline @var annotations should keep standard format', []);
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_DOC_COMMENT, \T_COMMENT]) && $tokens->isAnyTokenKindsFound([\T_FUNCTION, \T_VARIABLE]);
    }
    public function fix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $reverseTokens = $this->reverseTokens($tokens);
        foreach ($reverseTokens as $index => $token) {
            if (!$token->isGivenKind([\T_DOC_COMMENT, \T_COMMENT])) {
                continue;
            }
            $docContent = $token->getContent();
            if (!\_PhpScopercf327c47dfc5\Nette\Utils\Strings::match($docContent, self::TYPE_ANNOTATION_REGEX)) {
                continue;
            }
            $originalDocContent = $docContent;
            foreach ($this->malformWorkers as $malformWorker) {
                $docContent = $malformWorker->work($docContent, $tokens, $index);
            }
            if ($docContent === $originalDocContent) {
                continue;
            }
            $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\T_DOC_COMMENT, $docContent]);
        }
    }
    public function getPriority() : int
    {
        return $this->getPriorityBefore(\PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class);
    }
}
