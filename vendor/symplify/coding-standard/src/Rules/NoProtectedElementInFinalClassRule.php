<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Identifier;
use _PhpScoper3d04c8135695\PhpParser\Node\Name;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Property;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use ReflectionClass;
use _PhpScoper3d04c8135695\Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symplify\CodingStandard\PHPStan\ParentMethodAnalyser;
use Symplify\CodingStandard\PHPStan\Types\ClassMethodTypeAnalyzer;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoProtectedElementInFinalClassRule\NoProtectedElementInFinalClassRuleTest
 */
final class NoProtectedElementInFinalClassRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use protected element in final class';
    /**
     * @var ParentMethodAnalyser
     */
    private $parentMethodAnalyser;
    /**
     * @var ClassMethodTypeAnalyzer
     */
    private $classMethodTypeAnalyzer;
    public function __construct(\Symplify\CodingStandard\PHPStan\ParentMethodAnalyser $parentMethodAnalyser, \Symplify\CodingStandard\PHPStan\Types\ClassMethodTypeAnalyzer $classMethodTypeAnalyzer)
    {
        $this->parentMethodAnalyser = $parentMethodAnalyser;
        $this->classMethodTypeAnalyzer = $classMethodTypeAnalyzer;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Property::class, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param Property|ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $parent = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        if (!$parent instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_) {
            return [];
        }
        if (!$parent->isFinal()) {
            return [];
        }
        if (!$node->isProtected()) {
            return [];
        }
        if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod) {
            return $this->processClassMethod($node, $parent, $scope);
        }
        return $this->processProperty($parent, $node);
    }
    private function isPropertyExistInTraits(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_ $class, string $propertyName) : bool
    {
        /** @var Identifier $name */
        $name = $class->namespacedName;
        $usedTraits = \class_uses($name->toString());
        foreach ($usedTraits as $trait) {
            $r = new \ReflectionClass($trait);
            if ($r->hasProperty($propertyName)) {
                return \true;
            }
        }
        return \false;
    }
    private function isMethodExistInTraits(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_ $class, string $methodName) : bool
    {
        /** @var Identifier $name */
        $name = $class->namespacedName;
        $usedTraits = \class_uses($name->toString());
        foreach ($usedTraits as $trait) {
            $reflectionClass = new \ReflectionClass($trait);
            if ($reflectionClass->hasMethod($methodName)) {
                return \true;
            }
        }
        return \false;
    }
    private function isPropertyExistInParentClass(\_PhpScoper3d04c8135695\PhpParser\Node\Name $name, string $propertyName) : bool
    {
        $reflectionClass = new \ReflectionClass((string) $name);
        return $reflectionClass->hasProperty($propertyName);
    }
    /**
     * @return string[]
     */
    private function processClassMethod(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod $classMethod, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_ $class, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        // is Symfony Kernel required magic method?
        if ($this->isSymfonyMicroKernelRequired($classMethod, $scope)) {
            return [];
        }
        $methodName = (string) $classMethod->name;
        if ($this->isMethodExistInTraits($class, $methodName) || $this->parentMethodAnalyser->hasParentClassMethodWithSameName($scope, $methodName)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @return string[]
     */
    private function processProperty(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_ $class, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Property $property) : array
    {
        $extends = $class->extends;
        $propertyName = $property->props[0]->name->toString();
        if ($this->isPropertyExistInTraits($class, $propertyName) || $extends && $this->isPropertyExistInParentClass($extends, $propertyName)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isSymfonyMicroKernelRequired(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod $classMethod, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : bool
    {
        return $this->classMethodTypeAnalyzer->isClassMethodOfNamesAndType($classMethod, $scope, ['configureRoutes', 'configureContainer'], \_PhpScoper3d04c8135695\Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait::class);
    }
}
