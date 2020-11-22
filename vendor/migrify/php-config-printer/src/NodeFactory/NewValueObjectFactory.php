<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfacc742d2745\PhpParser\BuilderHelpers;
use _PhpScoperfacc742d2745\PhpParser\Node\Arg;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\Array_;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\New_;
use _PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\New_(new \_PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
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
                $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg($resolvedNestedObject = $this->create($propertyValue));
            } elseif (\is_array($propertyValue)) {
                $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg(new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Array_($this->createArgs($propertyValue)));
            } else {
                $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg(\_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
            }
        }
        return $args;
    }
}
