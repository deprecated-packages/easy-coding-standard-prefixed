<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan;

use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Reflection\ClassReflection;
final class ParentMethodAnalyser
{
    public function hasParentClassMethodWithSameName(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, string $methodName) : bool
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
