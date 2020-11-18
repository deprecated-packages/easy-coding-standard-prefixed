<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\FunctionName;
use _PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\SymfonyVersionFeature;
use _PhpScoperf77bffce0320\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScoperf77bffce0320\Nette\Utils\Strings;
use _PhpScoperf77bffce0320\PhpParser\BuilderHelpers;
use _PhpScoperf77bffce0320\PhpParser\Node;
use _PhpScoperf77bffce0320\PhpParser\Node\Arg;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\Array_;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\FuncCall;
use _PhpScoperf77bffce0320\PhpParser\Node\Name;
use _PhpScoperf77bffce0320\PhpParser\Node\Name\FullyQualified;
use _PhpScoperf77bffce0320\PhpParser\Node\Scalar\String_;
use _PhpScoperf77bffce0320\Symfony\Component\Yaml\Tag\TaggedValue;
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
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ConstantNodeFactory
     */
    private $constantNodeFactory;
    /**
     * @var SymfonyVersionFeatureGuardInterface
     */
    private $symfonyVersionFeatureGuard;
    public function __construct(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\ConstantNodeFactory $constantNodeFactory, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface $symfonyVersionFeatureGuard)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->constantNodeFactory = $constantNodeFactory;
        $this->symfonyVersionFeatureGuard = $symfonyVersionFeatureGuard;
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
            $items = [new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem($expr)];
            $array = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Array_($items);
        }
        return [new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($array)];
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
                $args[] = new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($expr);
            }
            return $args;
        }
        if ($values instanceof \_PhpScoperf77bffce0320\PhpParser\Node) {
            if ($values instanceof \_PhpScoperf77bffce0320\PhpParser\Node\Arg) {
                return [$values];
            }
            if ($values instanceof \_PhpScoperf77bffce0320\PhpParser\Node\Expr) {
                return [new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($values)];
            }
        }
        if (\is_string($values)) {
            $expr = $this->resolveExpr($values);
            return [new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($expr)];
        }
        throw new \_PhpScoperf77bffce0320\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function resolveExpr($value, bool $skipServiceReference = \false, bool $skipClassesToConstantReference = \false) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr
    {
        if (\is_string($value)) {
            return $this->resolveStringExpr($value, $skipServiceReference, $skipClassesToConstantReference);
        }
        if ($value instanceof \_PhpScoperf77bffce0320\PhpParser\Node\Expr) {
            return $value;
        }
        if ($value instanceof \_PhpScoperf77bffce0320\Symfony\Component\Yaml\Tag\TaggedValue) {
            return $this->createServiceReferenceFromTaggedValue($value);
        }
        if (\is_array($value)) {
            $arrayItems = $this->resolveArrayItems($value, $skipClassesToConstantReference);
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Array_($arrayItems);
        }
        return \_PhpScoperf77bffce0320\PhpParser\BuilderHelpers::normalizeValue($value);
    }
    private function resolveServiceReferenceExpr(string $value, bool $skipServiceReference, string $functionName) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr
    {
        $value = \ltrim($value, '@');
        $expr = $this->resolveExpr($value);
        if ($skipServiceReference) {
            return $expr;
        }
        $args = [new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($expr)];
        return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\FuncCall(new \_PhpScoperf77bffce0320\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
    private function resolveExprFromArray(array $values) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Array_
    {
        $arrayItems = [];
        foreach ($values as $key => $value) {
            $expr = \is_array($value) ? $this->resolveExprFromArray($value) : $this->resolveExpr($value);
            if (!\is_int($key)) {
                $keyExpr = $this->resolveExpr($key);
                $arrayItem = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem($expr, $keyExpr);
            } else {
                $arrayItem = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem($expr);
            }
            $arrayItems[] = $arrayItem;
        }
        return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Array_($arrayItems);
    }
    private function createServiceReferenceFromTaggedValue(\_PhpScoperf77bffce0320\Symfony\Component\Yaml\Tag\TaggedValue $taggedValue) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr
    {
        $shouldWrapInArray = \false;
        // that's the only value
        if ($taggedValue->getTag() === self::TAG_RETURNS_CLONE) {
            $serviceName = $taggedValue->getValue()[0];
            $functionName = $this->getRefOrServiceFunctionName();
            $shouldWrapInArray = \true;
        } elseif ($taggedValue->getTag() === self::TAG_SERVICE) {
            $serviceName = $taggedValue->getValue()['class'];
            $functionName = \_PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\FunctionName::INLINE_SERVICE;
        } else {
            if (\is_array($taggedValue->getValue())) {
                $args = $this->createFromValues($taggedValue->getValue());
            } else {
                $args = $this->createFromValues([$taggedValue->getValue()]);
            }
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\FuncCall(new \_PhpScoperf77bffce0320\PhpParser\Node\Name($taggedValue->getTag()), $args);
        }
        $funcCall = $this->resolveServiceReferenceExpr($serviceName, \false, $functionName);
        if ($shouldWrapInArray) {
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Array_([new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem($funcCall)]);
        }
        return $funcCall;
    }
    private function resolveStringExpr(string $value, bool $skipServiceReference, bool $skipClassesToConstantReference) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr
    {
        if ($value === '') {
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Scalar\String_($value);
        }
        $constFetch = $this->constantNodeFactory->createConstantIfValue($value);
        if ($constFetch !== null) {
            return $constFetch;
        }
        // do not print "\n" as empty space, but use string value instead
        if (\in_array($value, ["\r", "\n", "\r\n"], \true)) {
            $string = new \_PhpScoperf77bffce0320\PhpParser\Node\Scalar\String_($value);
            $string->setAttribute('kind', \_PhpScoperf77bffce0320\PhpParser\Node\Scalar\String_::KIND_DOUBLE_QUOTED);
            return $string;
        }
        $value = \ltrim($value, '\\');
        if (\ctype_upper($value[0]) && \class_exists($value) || \interface_exists($value)) {
            return $this->resolveClassType($skipClassesToConstantReference, $value);
        }
        if (\_PhpScoperf77bffce0320\Nette\Utils\Strings::startsWith($value, '@=')) {
            $value = \ltrim($value, '@=');
            $args = $this->createFromValues($value);
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\FuncCall(new \_PhpScoperf77bffce0320\PhpParser\Node\Name\FullyQualified(\_PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\FunctionName::EXPR), $args);
        }
        // is service reference
        if (\_PhpScoperf77bffce0320\Nette\Utils\Strings::startsWith($value, '@') && !$this->isFilePath($value)) {
            $refOrServiceFunctionName = $this->getRefOrServiceFunctionName();
            return $this->resolveServiceReferenceExpr($value, $skipServiceReference, $refOrServiceFunctionName);
        }
        return \_PhpScoperf77bffce0320\PhpParser\BuilderHelpers::normalizeValue($value);
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
                $arrayItem = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem($valueExpr, $keyExpr);
            } else {
                $arrayItem = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\ArrayItem($valueExpr);
            }
            $arrayItems[] = $arrayItem;
            ++$naturalKey;
        }
        return $arrayItems;
    }
    private function getRefOrServiceFunctionName() : string
    {
        if ($this->symfonyVersionFeatureGuard->isAtLeastSymfonyVersion(\_PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\SymfonyVersionFeature::REF_OVER_SERVICE)) {
            return \_PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\FunctionName::SERVICE;
        }
        return \_PhpScoperf77bffce0320\Migrify\ConfigTransformer\ValueObject\FunctionName::REF;
    }
    private function isFilePath(string $value) : bool
    {
        return (bool) \_PhpScoperf77bffce0320\Nette\Utils\Strings::match($value, '#\\.(twig|html|xml)$#');
    }
    private function resolveClassType(bool $skipClassesToConstantReference, string $value)
    {
        if ($skipClassesToConstantReference) {
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Scalar\String_($value);
        }
        return $this->commonNodeFactory->createClassReference($value);
    }
}
