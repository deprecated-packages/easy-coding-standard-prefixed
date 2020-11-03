<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\ParentGuard;

use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\FunctionVariant;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\ParametersAcceptorSelector;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\Php\PhpMethodReflection;
use _PhpScoper2b44cb0c30af\PHPStan\Type\Type;
final class ParentMethodReturnTypeResolver
{
    public function resolve(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : ?\_PhpScoper2b44cb0c30af\PHPStan\Type\Type
    {
        $functionReflection = $scope->getFunction();
        if (!$functionReflection instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\MethodReflection) {
            return null;
        }
        $classReflection = $scope->getClassReflection();
        if (!$classReflection instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection) {
            return null;
        }
        $methodName = $functionReflection->getName();
        /** @var ClassReflection[] $parentClassLikeReflections */
        $parentClassLikeReflections = \array_merge($classReflection->getParents(), $classReflection->getInterfaces());
        foreach ($parentClassLikeReflections as $parentClassLikeReflection) {
            if (!$parentClassLikeReflection->hasMethod($methodName)) {
                continue;
            }
            $nativeMethodReflection = $parentClassLikeReflection->getNativeMethod($methodName);
            if (!$nativeMethodReflection instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\Php\PhpMethodReflection) {
                continue;
            }
            $parametersAcceptor = \_PhpScoper2b44cb0c30af\PHPStan\Reflection\ParametersAcceptorSelector::selectSingle($nativeMethodReflection->getVariants());
            if (!$parametersAcceptor instanceof \_PhpScoper2b44cb0c30af\PHPStan\Reflection\FunctionVariant) {
                continue;
            }
            return $parametersAcceptor->getReturnType();
        }
        return null;
    }
}
