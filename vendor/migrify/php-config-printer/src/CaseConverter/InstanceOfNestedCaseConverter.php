<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Arg;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
