<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayItem;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrowFunction;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\AssignRef;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Closure;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Param;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Foreach_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PHPStan\ParentMethodAnalyser;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoReferenceRule\NoReferenceRuleTest
 */
final class NoReferenceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use explicit return value over magic &reference';
    /**
     * @var ParentMethodAnalyser
     */
    private $parentMethodAnalyser;
    public function __construct(\Symplify\CodingStandard\PHPStan\ParentMethodAnalyser $parentMethodAnalyser)
    {
        $this->parentMethodAnalyser = $parentMethodAnalyser;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\AssignRef::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Arg::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Foreach_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrayItem::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ArrowFunction::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Closure::class];
    }
    /**
     * @param ClassMethod|Function_|AssignRef|Arg|Foreach_|ArrayItem|ArrowFunction|Closure $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $errorMessages = [];
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\AssignRef) {
            $errorMessages[] = self::ERROR_MESSAGE;
        } elseif ($node->byRef) {
            $errorMessages[] = self::ERROR_MESSAGE;
        }
        $paramErrorMessage = $this->collectParamErrorMessages($node, $scope);
        $errorMessages = \array_merge($errorMessages, $paramErrorMessage);
        return \array_unique($errorMessages);
    }
    /**
     * @return string[]
     */
    private function collectParamErrorMessages(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Function_ && !$node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod) {
            return [];
        }
        // has parent method? → skip it as enforced by parent
        $methodName = (string) $node->name;
        if ($this->parentMethodAnalyser->hasParentClassMethodWithSameName($scope, $methodName)) {
            return [];
        }
        $errorMessages = [];
        foreach ((array) $node->params as $param) {
            /** @var Param $param */
            if (!$param->byRef) {
                continue;
            }
            $errorMessages[] = self::ERROR_MESSAGE;
        }
        return $errorMessages;
    }
}
