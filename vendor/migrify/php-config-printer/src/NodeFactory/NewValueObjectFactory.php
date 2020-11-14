<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopercda2b863d098\PhpParser\BuilderHelpers;
use _PhpScopercda2b863d098\PhpParser\Node\Arg;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\New_;
use _PhpScopercda2b863d098\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScopercda2b863d098\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScopercda2b863d098\PhpParser\Node\Expr\New_(new \_PhpScopercda2b863d098\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
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
            $args[] = new \_PhpScopercda2b863d098\PhpParser\Node\Arg(\_PhpScopercda2b863d098\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
        }
        return $args;
    }
}
