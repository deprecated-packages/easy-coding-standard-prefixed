<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopera88a8b9f064a\PhpParser\BuilderHelpers;
use _PhpScopera88a8b9f064a\PhpParser\Node\Arg;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\Array_;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\New_;
use _PhpScopera88a8b9f064a\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\New_(new \_PhpScopera88a8b9f064a\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
    }
    /**
     * @return mixed[]
     */
    private function resolvePropertyValuesFromValueObject(string $valueObjectClass, object $valueObject) : array
    {
        $reflectionClass = new \ReflectionClass($valueObjectClass);
        $propertyValues = [];
        foreach ($reflectionClass->getProperties() as $reflectionProperty) {
            $reflectionProperty->setAccessible(\true);
            $propertyValues[] = $reflectionProperty->getValue($valueObject);
        }
        return $propertyValues;
    }
    /**
     * @param mixed[] $propertyValues
     * @return Arg[]
     */
    private function createArgs(array $propertyValues) : array
    {
        $args = [];
        foreach ($propertyValues as $propertyValue) {
            if (\is_object($propertyValue)) {
                $args[] = new \_PhpScopera88a8b9f064a\PhpParser\Node\Arg($resolvedNestedObject = $this->create($propertyValue));
            } elseif (\is_array($propertyValue)) {
                $args[] = new \_PhpScopera88a8b9f064a\PhpParser\Node\Arg(new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\Array_($this->createArgs($propertyValue)));
            } else {
                $args[] = new \_PhpScopera88a8b9f064a\PhpParser\Node\Arg(\_PhpScopera88a8b9f064a\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
            }
        }
        return $args;
    }
}
