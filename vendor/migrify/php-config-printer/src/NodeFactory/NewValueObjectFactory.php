<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Arg;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\New_;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\New_(new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
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
            $args[] = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Arg(\_PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
        }
        return $args;
    }
}
