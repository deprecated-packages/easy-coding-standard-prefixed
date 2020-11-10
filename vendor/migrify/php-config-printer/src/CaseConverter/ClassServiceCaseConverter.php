<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\Variable;
use _PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall(new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\Variable(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
