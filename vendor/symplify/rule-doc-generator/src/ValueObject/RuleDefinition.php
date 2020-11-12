<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\ValueObject;

use _PhpScoper7cef7256eba6\Nette\Utils\Strings;
use Symplify\RuleDocGenerator\Contract\CodeSampleInterface;
use Symplify\RuleDocGenerator\Exception\PoorDocumentationException;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class RuleDefinition
{
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $ruleClass;
    /**
     * @var CodeSampleInterface[]
     */
    private $codeSamples = [];
    /**
     * @param CodeSampleInterface[] $codeSamples
     */
    public function __construct(string $description, array $codeSamples)
    {
        $this->description = $description;
        if ($codeSamples === []) {
            throw new \Symplify\RuleDocGenerator\Exception\PoorDocumentationException('Provide at least one code sample, so people can practically see what the rule does');
        }
        $this->codeSamples = $codeSamples;
    }
    public function getDescription() : string
    {
        return $this->description;
    }
    public function setRuleClass(string $ruleClass) : void
    {
        $this->ruleClass = $ruleClass;
    }
    public function isPHPStanRule() : bool
    {
        /** @noRector */
        return \is_a($this->ruleClass, '_PhpScoper7cef7256eba6\\PHPStan\\Rules\\Rule', \true);
    }
    public function isPHPCSFixer() : bool
    {
        /** @noRector */
        return \is_a($this->ruleClass, 'PhpCsFixer\\Fixer\\FixerInterface', \true);
    }
    public function isPHPCodeSniffer() : bool
    {
        /** @noRector */
        return \is_a($this->ruleClass, 'PHP_CodeSniffer\\Sniffs\\Sniff', \true);
    }
    public function getRuleClass() : string
    {
        if ($this->ruleClass === null) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return $this->ruleClass;
    }
    public function getRuleShortClass() : string
    {
        return (string) \_PhpScoper7cef7256eba6\Nette\Utils\Strings::after($this->ruleClass, '\\', -1);
    }
    /**
     * @return CodeSampleInterface[]
     */
    public function getCodeSamples() : array
    {
        return $this->codeSamples;
    }
    public function isConfigurable() : bool
    {
        foreach ($this->codeSamples as $codeSample) {
            if ($codeSample instanceof \Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample) {
                return \true;
            }
        }
        return \false;
    }
}