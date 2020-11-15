<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopercb576ca159b5\PhpParser\Node\Arg;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\Variable;
use _PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\Variable(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScopercb576ca159b5\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
