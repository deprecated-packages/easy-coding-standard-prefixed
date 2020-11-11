<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper2fe14d6302bc\PhpParser\BuilderHelpers;
use _PhpScoper2fe14d6302bc\PhpParser\Node\Arg;
use _PhpScoper2fe14d6302bc\PhpParser\Node\Expr\New_;
use _PhpScoper2fe14d6302bc\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScoper2fe14d6302bc\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScoper2fe14d6302bc\PhpParser\Node\Expr\New_(new \_PhpScoper2fe14d6302bc\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
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
            $args[] = new \_PhpScoper2fe14d6302bc\PhpParser\Node\Arg(\_PhpScoper2fe14d6302bc\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
        }
        return $args;
    }
}
