<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Printer\ArrayDecorator;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\NewValueObjectFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Reflection\ConstantNameFromValueResolver;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\Option;
use _PhpScoperad4605bb9267\PhpParser\Node\Arg;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\Array_;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\ArrayItem;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\FuncCall;
use _PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
final class ServiceConfigurationDecorator
{
    /**
     * @var ConstantNameFromValueResolver
     */
    private $constantNameFromValueResolver;
    /**
     * @var NewValueObjectFactory
     */
    private $newValueObjectFactory;
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    public function __construct(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Reflection\ConstantNameFromValueResolver $constantNameFromValueResolver, \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\NewValueObjectFactory $newValueObjectFactory, \Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider)
    {
        $this->constantNameFromValueResolver = $constantNameFromValueResolver;
        $this->newValueObjectFactory = $newValueObjectFactory;
        $this->parameterProvider = $parameterProvider;
    }
    /**
     * @param mixed|mixed[] $configuration
     * @return mixed|mixed[]
     */
    public function decorate($configuration, string $class)
    {
        if (!\is_array($configuration)) {
            return $configuration;
        }
        $configuration = $this->decorateClassConstantKeys($configuration, $class);
        foreach ($configuration as $key => $value) {
            if ($this->isArrayOfObjects($value)) {
                $configuration[$key] = $this->decorateValueObjects($value);
            } elseif (\is_object($value)) {
                $configuration[$key] = $this->decorateValueObject($value);
            }
        }
        return $configuration;
    }
    /**
     * @param mixed[] $configuration
     * @return mixed[]
     */
    private function decorateClassConstantKeys(array $configuration, string $class) : array
    {
        foreach ($configuration as $key => $value) {
            $constantName = $this->constantNameFromValueResolver->resolveFromValueAndClass($key, $class);
            if ($constantName === null) {
                continue;
            }
            unset($configuration[$key]);
            $classConstantReference = $class . '::' . $constantName;
            $configuration[$classConstantReference] = $value;
        }
        return $configuration;
    }
    private function decorateValueObject(object $value) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\FuncCall
    {
        $new = $this->newValueObjectFactory->create($value);
        $args = [new \_PhpScoperad4605bb9267\PhpParser\Node\Arg($new)];
        $functionName = $this->parameterProvider->provideStringParameter(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECT_FUNC_CALL_NAME);
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\FuncCall(new \_PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
    private function decorateValueObjects(array $values) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\FuncCall
    {
        $arrayItems = [];
        foreach ($values as $value) {
            $new = $this->newValueObjectFactory->create($value);
            $arrayItems[] = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\ArrayItem($new);
        }
        $array = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Array_($arrayItems);
        $args = [new \_PhpScoperad4605bb9267\PhpParser\Node\Arg($array)];
        $functionName = $this->parameterProvider->provideStringParameter(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\Option::INLINE_VALUE_OBJECTS_FUNC_CALL_NAME);
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\FuncCall(new \_PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
    private function isArrayOfObjects($values) : bool
    {
        if (!\is_array($values)) {
            return \false;
        }
        if ($values === []) {
            return \false;
        }
        foreach ($values as $value) {
            if (!\is_object($value)) {
                return \false;
            }
        }
        return \true;
    }
}
