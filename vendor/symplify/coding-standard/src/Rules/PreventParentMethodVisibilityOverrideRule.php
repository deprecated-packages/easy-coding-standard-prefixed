<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\Rector\Core\Exception\NotImplementedException;
use ReflectionMethod;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PreventParentMethodVisibilityOverrideRule\PreventParentMethodVisibilityOverrideRuleTest
 */
final class PreventParentMethodVisibilityOverrideRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Change "%s()" method visibility to "%s" to respect parent method visibility.';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if ($scope->getClassReflection() === null) {
            return [];
        }
        $classReflection = $scope->getClassReflection();
        $parentClassNames = $classReflection->getParentClassesNames();
        if ($parentClassNames === []) {
            return [];
        }
        $methodName = (string) $node->name;
        foreach ($parentClassNames as $parentClassName) {
            if (!\method_exists($parentClassName, $methodName)) {
                continue;
            }
            $parentReflectionMethod = new \ReflectionMethod($parentClassName, $methodName);
            if ($this->isClassMethodCompatibleWithParentReflectionMethod($node, $parentReflectionMethod)) {
                return [];
            }
            $methodVisibility = $this->resolveReflectionMethodVisibilityAsStrings($parentReflectionMethod);
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $methodName, $methodVisibility);
            return [$errorMessage];
        }
        return [];
    }
    private function isClassMethodCompatibleWithParentReflectionMethod(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod $classMethod, \ReflectionMethod $reflectionMethod) : bool
    {
        if ($reflectionMethod->isPublic() && $classMethod->isPublic()) {
            return \true;
        }
        if ($reflectionMethod->isProtected() && $classMethod->isProtected()) {
            return \true;
        }
        return $reflectionMethod->isPrivate() && $classMethod->isPrivate();
    }
    private function resolveReflectionMethodVisibilityAsStrings(\ReflectionMethod $reflectionMethod) : string
    {
        if ($reflectionMethod->isPublic()) {
            return 'public';
        }
        if ($reflectionMethod->isProtected()) {
            return 'protected';
        }
        if ($reflectionMethod->isPrivate()) {
            return 'private';
        }
        throw new \_PhpScoper8de082cbb8c7\Rector\Core\Exception\NotImplementedException();
    }
}
