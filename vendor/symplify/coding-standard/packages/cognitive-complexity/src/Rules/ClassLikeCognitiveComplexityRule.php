<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Trait_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\CognitiveComplexity\AstCognitiveComplexityAnalyzer;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see \Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\ClassLikeCognitiveComplexityRule\ClassLikeCognitiveComplexityRuleTest
 */
final class ClassLikeCognitiveComplexityRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = '%s cognitive complexity for "%s" is %d, keep it under %d';
    /**
     * @var int
     */
    private $maxClassCognitiveComplexity;
    /**
     * @var AstCognitiveComplexityAnalyzer
     */
    private $astCognitiveComplexityAnalyzer;
    public function __construct(\Symplify\CodingStandard\CognitiveComplexity\AstCognitiveComplexityAnalyzer $astCognitiveComplexityAnalyzer, int $maxClassCognitiveComplexity = 50)
    {
        $this->maxClassCognitiveComplexity = $maxClassCognitiveComplexity;
        $this->astCognitiveComplexityAnalyzer = $astCognitiveComplexityAnalyzer;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Trait_::class];
    }
    /**
     * @param Class_|Trait_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $classLikeCognitiveComplexity = 0;
        $classMethods = $node->getMethods();
        foreach ($classMethods as $classMethod) {
            $classLikeCognitiveComplexity += $this->astCognitiveComplexityAnalyzer->analyzeFunctionLike($classMethod);
        }
        if ($classLikeCognitiveComplexity <= $this->maxClassCognitiveComplexity) {
            return [];
        }
        $classLikeName = (string) $node->name;
        $type = $node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_ ? 'Class' : 'Trait';
        $message = \sprintf(self::ERROR_MESSAGE, $type, $classLikeName, $classLikeCognitiveComplexity, $this->maxClassCognitiveComplexity);
        return [$message];
    }
}
