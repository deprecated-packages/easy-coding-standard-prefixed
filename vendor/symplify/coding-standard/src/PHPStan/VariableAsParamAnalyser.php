<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan;

use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Reflection\MethodReflection;
use _PhpScoper8de082cbb8c7\PHPStan\Reflection\Php\PhpMethodFromParserNodeReflection;
use Symplify\CodingStandard\ValueObject\MethodName;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
final class VariableAsParamAnalyser
{
    /**
     * @var PrivatesAccessor
     */
    private $privatesAccessor;
    public function __construct(\Symplify\PackageBuilder\Reflection\PrivatesAccessor $privatesAccessor)
    {
        $this->privatesAccessor = $privatesAccessor;
    }
    public function isVariableFromConstructorParam(\_PhpScoper8de082cbb8c7\PHPStan\Reflection\MethodReflection $methodReflection, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable $variable) : bool
    {
        if ($methodReflection->getName() !== \Symplify\CodingStandard\ValueObject\MethodName::CONSTRUCTOR) {
            return \false;
        }
        if (!$methodReflection instanceof \_PhpScoper8de082cbb8c7\PHPStan\Reflection\Php\PhpMethodFromParserNodeReflection) {
            return \false;
        }
        $constructorClassMethod = $this->privatesAccessor->getPrivateProperty($methodReflection, 'functionLike');
        if (!$constructorClassMethod instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod) {
            return \false;
        }
        if ($variable->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return \false;
        }
        $variableName = (string) $variable->name;
        foreach ($constructorClassMethod->params as $param) {
            $paramName = (string) $param->var->name;
            if ($variableName === $paramName) {
                return \true;
            }
        }
        return \false;
    }
}
