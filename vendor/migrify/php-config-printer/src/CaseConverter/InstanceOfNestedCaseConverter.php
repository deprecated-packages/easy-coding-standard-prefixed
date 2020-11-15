<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper70072c07b02b\PhpParser\Node\Arg;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\Variable;
use _PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\Variable(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoper70072c07b02b\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
