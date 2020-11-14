<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopercda2b863d098\PhpParser\Node\Arg;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\Variable;
use _PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScopercda2b863d098\PhpParser\Node\Expr\Variable(\_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScopercda2b863d098\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScopercda2b863d098\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
