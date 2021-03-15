<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoper971ef29294dd\PhpParser\BuilderHelpers;
use _PhpScoper971ef29294dd\PhpParser\Node;
use _PhpScoper971ef29294dd\PhpParser\Node\Arg;
use _PhpScoper971ef29294dd\PhpParser\Node\Expr;
use _PhpScoper971ef29294dd\PhpParser\Node\Expr\Array_;
use _PhpScoper971ef29294dd\PhpParser\Node\Expr\ArrayItem;
use _PhpScoper971ef29294dd\PhpParser\Node\Expr\FuncCall;
use _PhpScoper971ef29294dd\PhpParser\Node\Name;
use _PhpScoper971ef29294dd\Symfony\Component\Yaml\Tag\TaggedValue;
use Symplify\PhpConfigPrinter\Exception\NotImplementedYetException;
use Symplify\PhpConfigPrinter\ExprResolver\StringExprResolver;
use Symplify\PhpConfigPrinter\ExprResolver\TaggedReturnsCloneResolver;
use Symplify\PhpConfigPrinter\ExprResolver\TaggedServiceResolver;
final class ArgsNodeFactory
{
    /**
     * @var string
     */
    private const TAG_SERVICE = 'service';
    /**
     * @var string
     */
    private const TAG_RETURNS_CLONE = 'returns_clone';
    /**
     * @var StringExprResolver
     */
    private $stringExprResolver;
    /**
     * @var TaggedReturnsCloneResolver
     */
    private $taggedReturnsCloneResolver;
    /**
     * @var TaggedServiceResolver
     */
    private $taggedServiceResolver;
    public function __construct(\Symplify\PhpConfigPrinter\ExprResolver\StringExprResolver $stringExprResolver, \Symplify\PhpConfigPrinter\ExprResolver\TaggedReturnsCloneResolver $taggedReturnsCloneResolver, \Symplify\PhpConfigPrinter\ExprResolver\TaggedServiceResolver $taggedServiceResolver)
    {
        $this->stringExprResolver = $stringExprResolver;
        $this->taggedReturnsCloneResolver = $taggedReturnsCloneResolver;
        $this->taggedServiceResolver = $taggedServiceResolver;
    }
    /**
     * @return Arg[]
     */
    public function createFromValuesAndWrapInArray($values) : array
    {
        if (\is_array($values)) {
            $array = $this->resolveExprFromArray($values);
        } else {
            $expr = $this->resolveExpr($values);
            $items = [new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\ArrayItem($expr)];
            $array = new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\Array_($items);
        }
        return [new \_PhpScoper971ef29294dd\PhpParser\Node\Arg($array)];
    }
    /**
     * @return Arg[]
     */
    public function createFromValues($values, bool $skipServiceReference = \false, bool $skipClassesToConstantReference = \false) : array
    {
        if (\is_array($values)) {
            $args = [];
            foreach ($values as $value) {
                $expr = $this->resolveExpr($value, $skipServiceReference, $skipClassesToConstantReference);
                $args[] = new \_PhpScoper971ef29294dd\PhpParser\Node\Arg($expr);
            }
            return $args;
        }
        if ($values instanceof \_PhpScoper971ef29294dd\PhpParser\Node) {
            if ($values instanceof \_PhpScoper971ef29294dd\PhpParser\Node\Arg) {
                return [$values];
            }
            if ($values instanceof \_PhpScoper971ef29294dd\PhpParser\Node\Expr) {
                return [new \_PhpScoper971ef29294dd\PhpParser\Node\Arg($values)];
            }
        }
        if (\is_string($values)) {
            $expr = $this->resolveExpr($values);
            return [new \_PhpScoper971ef29294dd\PhpParser\Node\Arg($expr)];
        }
        throw new \Symplify\PhpConfigPrinter\Exception\NotImplementedYetException();
    }
    public function resolveExpr($value, bool $skipServiceReference = \false, bool $skipClassesToConstantReference = \false) : \_PhpScoper971ef29294dd\PhpParser\Node\Expr
    {
        if (\is_string($value)) {
            return $this->stringExprResolver->resolve($value, $skipServiceReference, $skipClassesToConstantReference);
        }
        if ($value instanceof \_PhpScoper971ef29294dd\PhpParser\Node\Expr) {
            return $value;
        }
        if ($value instanceof \_PhpScoper971ef29294dd\Symfony\Component\Yaml\Tag\TaggedValue) {
            return $this->createServiceReferenceFromTaggedValue($value);
        }
        if (\is_array($value)) {
            $arrayItems = $this->resolveArrayItems($value, $skipClassesToConstantReference);
            return new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\Array_($arrayItems);
        }
        return \_PhpScoper971ef29294dd\PhpParser\BuilderHelpers::normalizeValue($value);
    }
    private function resolveExprFromArray(array $values) : \_PhpScoper971ef29294dd\PhpParser\Node\Expr\Array_
    {
        $arrayItems = [];
        foreach ($values as $key => $value) {
            $expr = \is_array($value) ? $this->resolveExprFromArray($value) : $this->resolveExpr($value);
            if (!\is_int($key)) {
                $keyExpr = $this->resolveExpr($key);
                $arrayItem = new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\ArrayItem($expr, $keyExpr);
            } else {
                $arrayItem = new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\ArrayItem($expr);
            }
            $arrayItems[] = $arrayItem;
        }
        return new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\Array_($arrayItems);
    }
    private function createServiceReferenceFromTaggedValue(\_PhpScoper971ef29294dd\Symfony\Component\Yaml\Tag\TaggedValue $taggedValue) : \_PhpScoper971ef29294dd\PhpParser\Node\Expr
    {
        // that's the only value
        if ($taggedValue->getTag() === self::TAG_RETURNS_CLONE) {
            return $this->taggedReturnsCloneResolver->resolve($taggedValue);
        }
        if ($taggedValue->getTag() === self::TAG_SERVICE) {
            return $this->taggedServiceResolver->resolve($taggedValue);
        }
        $args = $this->createFromValues($taggedValue->getValue());
        return new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\FuncCall(new \_PhpScoper971ef29294dd\PhpParser\Node\Name($taggedValue->getTag()), $args);
    }
    /**
     * @param mixed[] $value
     * @return ArrayItem[]
     */
    private function resolveArrayItems(array $value, bool $skipClassesToConstantReference) : array
    {
        $arrayItems = [];
        $naturalKey = 0;
        foreach ($value as $nestedKey => $nestedValue) {
            $valueExpr = $this->resolveExpr($nestedValue, \false, $skipClassesToConstantReference);
            if (!\is_int($nestedKey) || $nestedKey !== $naturalKey) {
                $keyExpr = $this->resolveExpr($nestedKey, \false, $skipClassesToConstantReference);
                $arrayItem = new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\ArrayItem($valueExpr, $keyExpr);
            } else {
                $arrayItem = new \_PhpScoper971ef29294dd\PhpParser\Node\Expr\ArrayItem($valueExpr);
            }
            $arrayItems[] = $arrayItem;
            ++$naturalKey;
        }
        return $arrayItems;
    }
}
