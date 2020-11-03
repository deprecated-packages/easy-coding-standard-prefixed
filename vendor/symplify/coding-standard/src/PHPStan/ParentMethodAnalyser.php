<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan;

use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Reflection\ClassReflection;
final class ParentMethodAnalyser
{
    public function hasParentClassMethodWithSameName(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, string $methodName) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        /** @var ClassReflection[] $parentClassLikeReflections */
        $parentClassLikeReflections = \array_merge($classReflection->getParents(), $classReflection->getInterfaces());
        foreach ($parentClassLikeReflections as $classLikeReflection) {
            if ($classLikeReflection->hasMethod($methodName)) {
                return \true;
            }
        }
        return \false;
    }
}
