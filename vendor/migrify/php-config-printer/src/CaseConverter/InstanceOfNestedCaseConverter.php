<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4605bb9267\PhpParser\Node\Arg;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable;
use _PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoperad4605bb9267\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
