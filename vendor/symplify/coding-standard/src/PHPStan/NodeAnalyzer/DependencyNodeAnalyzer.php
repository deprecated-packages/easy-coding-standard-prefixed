<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\NodeAnalyzer;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Trait_;
use _PhpScoper8de082cbb8c7\PhpParser\NodeFinder;
use Symplify\CodingStandard\PHPStan\Naming\SimpleNameResolver;
use Symplify\CodingStandard\ValueObject\MethodName;
use Symplify\CodingStandard\ValueObject\PHPStanAttributeKey;
final class DependencyNodeAnalyzer
{
    /**
     * @var string
     * @see https://regex101.com/r/gn2P0C/1
     */
    private const REQUIRED_DOCBLOCK_REGEX = '#\\*\\s+@required\\n?#';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    /**
     * @var SimpleNameResolver
     */
    private $simpleNameResolver;
    public function __construct(\_PhpScoper8de082cbb8c7\PhpParser\NodeFinder $nodeFinder, \Symplify\CodingStandard\PHPStan\Naming\SimpleNameResolver $simpleNameResolver)
    {
        $this->nodeFinder = $nodeFinder;
        $this->simpleNameResolver = $simpleNameResolver;
    }
    public function isInsideAbstractClassAndPassedAsDependencyViaConstructorOrSetUp(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property $property) : bool
    {
        $classLike = $this->resolveCurrentClass($property);
        if (!$classLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_) {
            return \false;
        }
        if (!$classLike->isAbstract()) {
            return \false;
        }
        $classMethod = $classLike->getMethod(\Symplify\CodingStandard\ValueObject\MethodName::CONSTRUCTOR) ?? $classLike->getMethod(\Symplify\CodingStandard\ValueObject\MethodName::SET_UP);
        if (!$classMethod instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod) {
            return \false;
        }
        /** @var Assign[] $assigns */
        $assigns = $this->nodeFinder->findInstanceOf($classMethod, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign::class);
        if ($assigns === []) {
            return \false;
        }
        return $this->isBeeingAssignedInAssigns($property, $assigns);
    }
    public function isInsideClassAndPassedAsDependencyViaAutowireMethod(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property $property) : bool
    {
        $classLike = $this->resolveCurrentClass($property);
        if (!$classLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_ && !$classLike instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Trait_) {
            return \false;
        }
        $shortClassName = (string) $classLike->name;
        $autowireMethodName = 'autowire' . $shortClassName;
        $classMethod = $classLike->getMethod($autowireMethodName);
        if (!$classMethod instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod) {
            return \false;
        }
        if (!$this->hasRequiredAnnotation($classMethod)) {
            return \false;
        }
        /** @var Assign[] $assigns */
        $assigns = $this->nodeFinder->findInstanceOf($classMethod, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign::class);
        if ($assigns === []) {
            return \false;
        }
        return $this->isBeeingAssignedInAssigns($property, $assigns);
    }
    /**
     * @param Assign[] $assigns
     */
    private function isBeeingAssignedInAssigns(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property $property, array $assigns) : bool
    {
        foreach ($assigns as $assign) {
            if (!$assign->var instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch) {
                continue;
            }
            if ($this->isPropertyFetchAndPropertyMatch($assign->var, $property)) {
                return \true;
            }
        }
        return \false;
    }
    private function resolveCurrentClass(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : ?\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike
    {
        $class = $node->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        while ($class) {
            if ($class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike) {
                return $class;
            }
            $class = $class->getAttribute(\Symplify\CodingStandard\ValueObject\PHPStanAttributeKey::PARENT);
        }
        return null;
    }
    private function isPropertyFetchAndPropertyMatch(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch $propertyFetch, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property $property) : bool
    {
        $assignedPropertyName = $this->simpleNameResolver->getName($property);
        if ($assignedPropertyName === null) {
            return \false;
        }
        if (!$this->isLocalPropertyFetch($propertyFetch)) {
            return \false;
        }
        $propertyName = $this->simpleNameResolver->getName($propertyFetch->name);
        if ($propertyName === null) {
            return \false;
        }
        return $propertyName === $assignedPropertyName;
    }
    private function isLocalPropertyFetch(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch $propertyFetch) : bool
    {
        if (!$propertyFetch->var instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable) {
            return \false;
        }
        $propertyVariableName = $this->simpleNameResolver->getName($propertyFetch->var);
        return $propertyVariableName === 'this';
    }
    private function hasRequiredAnnotation(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod $classMethod) : bool
    {
        $docComment = $classMethod->getDocComment();
        if ($docComment === null) {
            return \false;
        }
        return (bool) \_PhpScoper8de082cbb8c7\Nette\Utils\Strings::match($docComment->getText(), self::REQUIRED_DOCBLOCK_REGEX);
    }
}
