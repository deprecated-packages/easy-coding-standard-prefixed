<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Reflection\MethodReflection;
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall::class];
    }
    /**
     * @param string[] $call
     */
    protected function isFuncCallToCallMatch(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall $funcCall, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, string $functionName, array $call) : bool
    {
        if (!$this->nodeNameResolver->isName($funcCall->name, $functionName)) {
            return \false;
        }
        return !$this->isInDesiredMethod($scope, $call[0], $call[1]);
    }
    private function isInDesiredMethod(\_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, string $class, string $method) : bool
    {
        $function = $scope->getFunction();
        if (!$function instanceof \_PhpScoper8de082cbb8c7\PHPStan\Reflection\MethodReflection) {
            return \false;
        }
        if ($function->getName() !== $method) {
            return \false;
        }
        $classReflection = $function->getDeclaringClass();
        return $classReflection->getName() === $class;
    }
}
