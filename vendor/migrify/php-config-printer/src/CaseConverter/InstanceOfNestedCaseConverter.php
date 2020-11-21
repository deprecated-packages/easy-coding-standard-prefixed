<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera4be459e5e3d\PhpParser\Node\Arg;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable;
use _PhpScopera4be459e5e3d\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera4be459e5e3d\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScopera4be459e5e3d\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScopera4be459e5e3d\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
