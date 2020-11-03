<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrowFunction;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Closure;
use _PhpScoper8de082cbb8c7\PhpParser\Node\FunctionLike;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\CognitiveComplexity\AstCognitiveComplexityAnalyzer;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
/**
 * Based on https://www.sonarsource.com/docs/CognitiveComplexity.pdf
 *
 * A Cognitive Complexity score has 3 rules:
 * - B1. Ignore structures that allow multiple statements to be readably shorthanded into one
 * - B2. Increment (add one) for each break in the linear flow of the code
 * - B3. Increment when flow-breaking structures are nested
 *
 * @see https://www.tomasvotruba.com/blog/2018/05/21/is-your-code-readable-by-humans-cognitive-complexity-tells-you/
 *
 * @see \Symplify\CodingStandard\CognitiveComplexity\Tests\Rules\FunctionLikeCognitiveComplexityRule\FunctionLikeCognitiveComplexityRuleTest
 */
final class FunctionLikeCognitiveComplexityRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Cognitive complexity for "%s" is %d, keep it under %d';
    /**
     * @var int
     */
    private $maxMethodCognitiveComplexity;
    /**
     * @var AstCognitiveComplexityAnalyzer
     */
    private $astCognitiveComplexityAnalyzer;
    public function __construct(\Symplify\CodingStandard\CognitiveComplexity\AstCognitiveComplexityAnalyzer $astCognitiveComplexityAnalyzer, int $maxMethodCognitiveComplexity = 8)
    {
        $this->maxMethodCognitiveComplexity = $maxMethodCognitiveComplexity;
        $this->astCognitiveComplexityAnalyzer = $astCognitiveComplexityAnalyzer;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_::class];
    }
    /**
     * @param Function_|ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $functionLikeCognitiveComplexity = $this->astCognitiveComplexityAnalyzer->analyzeFunctionLike($node);
        if ($functionLikeCognitiveComplexity <= $this->maxMethodCognitiveComplexity) {
            return [];
        }
        $functionLikeName = $this->resolveFunctionName($node, $scope);
        $message = \sprintf(self::ERROR_MESSAGE, $functionLikeName, $functionLikeCognitiveComplexity, $this->maxMethodCognitiveComplexity);
        return [$message];
    }
    private function resolveFunctionName(\_PhpScoper8de082cbb8c7\PhpParser\Node\FunctionLike $functionLike, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : string
    {
        if ($functionLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_) {
            return $functionLike->name . '()';
        }
        if ($functionLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod) {
            $name = '';
            $classReflection = $scope->getClassReflection();
            if ($classReflection !== null) {
                $name = $classReflection->getName() . '::';
            }
            return $name . $functionLike->name . '()';
        }
        if ($functionLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Closure) {
            return 'closure';
        }
        if ($functionLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrowFunction) {
            return 'arrow function';
        }
        throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
    }
}
