<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Rules\Rule;
use Symplify\CodingStandard\Contract\ManyNodeRuleInterface;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
abstract class AbstractSymplifyRule implements \_PhpScoper3d04c8135695\PHPStan\Rules\Rule, \Symplify\CodingStandard\Contract\ManyNodeRuleInterface
{
    public function getShortClassName(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : ?string
    {
        $className = $this->getClassName($scope);
        if ($className === null) {
            return null;
        }
        return $this->resolveShortName($className);
    }
    public function getClassName(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : ?string
    {
        if ($scope->isInTrait()) {
            $traitReflection = $scope->getTraitReflection();
            if ($traitReflection === null) {
                return null;
            }
            return $traitReflection->getName();
        }
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return null;
        }
        return $classReflection->getName();
    }
    public function getNodeType() : string
    {
        return \_PhpScoper3d04c8135695\PhpParser\Node::class;
    }
    /**
     * @return mixed[]
     */
    public function processNode(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if ($this->shouldSkipNode($node)) {
            return [];
        }
        return $this->process($node, $scope);
    }
    public function resolveCurrentClassName(\_PhpScoper3d04c8135695\PhpParser\Node $node) : ?string
    {
        $class = $this->resolveCurrentClass($node);
        if ($class === null) {
            return null;
        }
        // anonymous  class
        if ($class->namespacedName === null) {
            return null;
        }
        return (string) $class->namespacedName;
    }
    public function resolveCurrentClass(\_PhpScoper3d04c8135695\PhpParser\Node $node) : ?\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_
    {
        $class = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($class) {
            if ($class instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_) {
                return $class;
            }
            $class = $class->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    public function resolveCurrentClassMethod(\_PhpScoper3d04c8135695\PhpParser\Node $node) : ?\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod
    {
        $classMethod = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($classMethod) {
            if ($classMethod instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod) {
                return $classMethod;
            }
            $classMethod = $classMethod->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    public function getFirstParentByType(\_PhpScoper3d04c8135695\PhpParser\Node $node, string $nodeClass) : ?\_PhpScoper3d04c8135695\PhpParser\Node
    {
        $node = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($node) {
            if (\is_a($node, $nodeClass, \true) && $node instanceof \_PhpScoper3d04c8135695\PhpParser\Node) {
                return $node;
            }
            $node = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    private function shouldSkipNode(\_PhpScoper3d04c8135695\PhpParser\Node $node) : bool
    {
        $nodeTypes = $this->getNodeTypes();
        foreach ($nodeTypes as $nodeType) {
            if (\is_a($node, $nodeType, \true)) {
                return \false;
            }
        }
        return \true;
    }
    private function resolveShortName(string $className) : string
    {
        if (!\_PhpScoper3d04c8135695\Nette\Utils\Strings::contains($className, '\\')) {
            return $className;
        }
        return (string) \_PhpScoper3d04c8135695\Nette\Utils\Strings::after($className, '\\', -1);
    }
}
