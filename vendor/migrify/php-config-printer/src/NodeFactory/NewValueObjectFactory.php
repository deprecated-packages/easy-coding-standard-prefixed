<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopera189153e1f79\PhpParser\BuilderHelpers;
use _PhpScopera189153e1f79\PhpParser\Node\Arg;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\Array_;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\New_;
use _PhpScopera189153e1f79\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScopera189153e1f79\PhpParser\Node\Expr\New_(new \_PhpScopera189153e1f79\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
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
                $args[] = new \_PhpScopera189153e1f79\PhpParser\Node\Arg($resolvedNestedObject = $this->create($propertyValue));
            } elseif (\is_array($propertyValue)) {
                $args[] = new \_PhpScopera189153e1f79\PhpParser\Node\Arg(new \_PhpScopera189153e1f79\PhpParser\Node\Expr\Array_($this->createArgs($propertyValue)));
            } else {
                $args[] = new \_PhpScopera189153e1f79\PhpParser\Node\Arg(\_PhpScopera189153e1f79\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
            }
        }
        return $args;
    }
}
