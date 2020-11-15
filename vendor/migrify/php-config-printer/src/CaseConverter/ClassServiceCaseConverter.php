<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\Variable;
use _PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall(new \_PhpScopera189153e1f79\PhpParser\Node\Expr\Variable(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
