<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Rules\Rule;
use Symplify\CodingStandard\Contract\ManyNodeRuleInterface;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
abstract class AbstractSymplifyRule implements \_PhpScoper2b44cb0c30af\PHPStan\Rules\Rule, \Symplify\CodingStandard\Contract\ManyNodeRuleInterface
{
    public function getShortClassName(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : ?string
    {
        $className = $this->getClassName($scope);
        if ($className === null) {
            return null;
        }
        return $this->resolveShortName($className);
    }
    public function getClassName(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : ?string
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
        return \_PhpScoper2b44cb0c30af\PhpParser\Node::class;
    }
    /**
     * @return mixed[]
     */
    public function processNode(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($this->shouldSkipNode($node)) {
            return [];
        }
        return $this->process($node, $scope);
    }
    public function resolveCurrentClassName(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : ?string
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
    public function resolveCurrentClass(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_
    {
        $class = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($class) {
            if ($class instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_) {
                return $class;
            }
            $class = $class->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    public function resolveCurrentClassMethod(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod
    {
        $classMethod = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($classMethod) {
            if ($classMethod instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod) {
                return $classMethod;
            }
            $classMethod = $classMethod->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    public function getFirstParentByType(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, string $nodeClass) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node
    {
        $node = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($node) {
            if (\is_a($node, $nodeClass, \true) && $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node) {
                return $node;
            }
            $node = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    private function shouldSkipNode(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool
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
        if (!\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::contains($className, '\\')) {
            return $className;
        }
        return (string) \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::after($className, '\\', -1);
    }
}
