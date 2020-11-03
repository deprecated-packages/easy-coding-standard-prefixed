<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Param;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PreferredClassRule\PreferredClassRuleTest
 */
final class PreferredClassRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Instead of "%s" class/interface use "%s"';
    /**
     * @var string[]
     */
    private $oldToPrefferedClasses = [];
    /**
     * @param string[] $oldToPrefferedClasses
     */
    public function __construct(array $oldToPrefferedClasses)
    {
        $this->oldToPrefferedClasses = $oldToPrefferedClasses;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Name::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall::class];
    }
    /**
     * @param New_|Name|Class_|StaticCall $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_) {
            return $this->processNew($node, $scope);
        }
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_) {
            return $this->processClass($node);
        }
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall) {
            return $this->processStaticCall($node, $scope);
        }
        return $this->processClassName($node->toString(), $node, $scope);
    }
    /**
     * @return string[]
     */
    private function processNew(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_ $new, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $newClass = $new->class;
        if ($newClass instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return [];
        }
        if ($newClass instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_) {
            $shortClassName = $newClass->name;
            if ($shortClassName === null) {
                return [];
            }
            $className = $shortClassName->toString();
        } else {
            $className = (string) $newClass;
        }
        return $this->processClassName($className, $new, $scope);
    }
    /**
     * @return string[]
     */
    private function processClass(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_ $class) : array
    {
        if ($class->extends === null) {
            return [];
        }
        $parentClass = $class->extends->toString();
        foreach ($this->oldToPrefferedClasses as $oldClass => $prefferedClass) {
            if ($parentClass !== $oldClass) {
                continue;
            }
            // check special case, when new class is actually the one we use
            if ($prefferedClass === (string) $class->namespacedName) {
                return [];
            }
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $oldClass, $prefferedClass);
            return [$errorMessage];
        }
        return [];
    }
    /**
     * @return string[]
     */
    private function processClassName(string $className, \_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if ($this->isTypeRequiredByParentClassOrContract($node, $scope)) {
            return [];
        }
        foreach ($this->oldToPrefferedClasses as $oldClass => $prefferedClass) {
            if ($className !== $oldClass) {
                continue;
            }
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $oldClass, $prefferedClass);
            return [$errorMessage];
        }
        return [];
    }
    private function isTypeRequiredByParentClassOrContract(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : bool
    {
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parent instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Param) {
            return \false;
        }
        // possibly protected by parent class
        $parentParent = $parent->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parentParent instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod) {
            return \false;
        }
        /** @var string $methodName */
        $methodName = (string) $parentParent->name;
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return \false;
        }
        $parentClassLikes = \array_merge($classReflection->getInterfaces(), $classReflection->getParents());
        foreach ($parentClassLikes as $parentClassLike) {
            if ($parentClassLike->hasMethod($methodName)) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * @return string[]
     */
    private function processStaticCall(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall $staticCall, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if ($staticCall->class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return [];
        }
        $className = (string) $staticCall->class;
        return $this->processClassName($className, $staticCall, $scope);
    }
}
