<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Reflection\MethodReflection;
use Symplify\CodingStandard\PhpParser\NodeNameResolver;
abstract class AbstractPrefferedCallOverFuncRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var NodeNameResolver
     */
    private $nodeNameResolver;
    public function __construct(\Symplify\CodingStandard\PhpParser\NodeNameResolver $nodeNameResolver)
    {
        $this->nodeNameResolver = $nodeNameResolver;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall::class];
    }
    /**
     * @param string[] $call
     */
    protected function isFuncCallToCallMatch(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall $funcCall, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, string $functionName, array $call) : bool
    {
        if (!$this->nodeNameResolver->isName($funcCall->name, $functionName)) {
            return \false;
        }
        return !$this->isInDesiredMethod($scope, $call[0], $call[1]);
    }
    private function isInDesiredMethod(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, string $class, string $method) : bool
    {
        $function = $scope->getFunction();
        if (!$function instanceof \_PhpScoper3d04c8135695\PHPStan\Reflection\MethodReflection) {
            return \false;
        }
        if ($function->getName() !== $method) {
            return \false;
        }
        $classReflection = $function->getDeclaringClass();
        return $classReflection->getName() === $class;
    }
}
