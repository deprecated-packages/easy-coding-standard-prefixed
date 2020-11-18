<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperf77bffce0320\PhpParser\Node\Arg;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\Variable;
use _PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Variable(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
