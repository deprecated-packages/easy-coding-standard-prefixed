<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperbcc0395698f8\PhpParser\Node\Arg;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoperbcc0395698f8\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
