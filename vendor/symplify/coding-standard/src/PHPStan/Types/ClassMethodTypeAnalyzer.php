<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\Types;

use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
final class ClassMethodTypeAnalyzer
{
    /**
     * @param string[] $methodNames
     */
    public function isClassMethodOfNamesAndType(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod $classMethod, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, array $methodNames, string $classType) : bool
    {
        $classMethodName = (string) $classMethod->name;
        if (!\in_array($classMethodName, $methodNames, \true)) {
            return \false;
        }
        return $this->isClassType($scope, $classType);
    }
    private function isClassType(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, string $classType) : bool
    {
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        if (\is_a($classReflection->getName(), $classType, \true)) {
            return \true;
        }
        return $classReflection->hasTraitUse($classType);
    }
}
