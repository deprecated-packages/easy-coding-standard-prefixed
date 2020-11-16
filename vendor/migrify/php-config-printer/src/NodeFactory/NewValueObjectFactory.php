<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper3e1e0e5bb8ef\PhpParser\BuilderHelpers;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Arg;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Array_;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\New_;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name\FullyQualified;
use ReflectionClass;
final class NewValueObjectFactory
{
    public function create(object $valueObject) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\New_
    {
        $valueObjectClass = \get_class($valueObject);
        $propertyValues = $this->resolvePropertyValuesFromValueObject($valueObjectClass, $valueObject);
        $args = $this->createArgs($propertyValues);
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\New_(new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name\FullyQualified($valueObjectClass), $args);
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
                $args[] = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Arg($resolvedNestedObject = $this->create($propertyValue));
            } elseif (\is_array($propertyValue)) {
                $args[] = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Arg(new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Array_($this->createArgs($propertyValue)));
            } else {
                $args[] = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Arg(\_PhpScoper3e1e0e5bb8ef\PhpParser\BuilderHelpers::normalizeValue($propertyValue));
            }
        }
        return $args;
    }
}
