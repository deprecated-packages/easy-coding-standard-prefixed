<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper967c4b7e296e\PhpParser\Node\Arg;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\Variable;
use _PhpScoper967c4b7e296e\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _instanceof: <---
 */
final class InstanceOfNestedCaseConverter implements \_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper967c4b7e296e\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $servicesVariable = new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\Variable(\_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
        $args = [new \_PhpScoper967c4b7e296e\PhpParser\Node\Arg($classConstFetch)];
        $instanceofMethodCall = new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall($servicesVariable, \_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\MethodName::INSTANCEOF, $args);
        $instanceofMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $instanceofMethodCall);
        $expression = new \_PhpScoper967c4b7e296e\PhpParser\Node\Stmt\Expression($instanceofMethodCall);
        $expression->setAttribute('comments', $instanceofMethodCall->getComments());
        return $expression;
    }
    public function match(string $rootKey, $subKey) : bool
    {
        if ($rootKey !== \_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (!\is_string($subKey)) {
            return \false;
        }
        return $subKey === \_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_INSTANCEOF;
    }
}
