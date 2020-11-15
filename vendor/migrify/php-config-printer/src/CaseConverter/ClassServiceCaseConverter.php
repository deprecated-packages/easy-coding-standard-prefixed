<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\Variable;
use _PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall(new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\Variable(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
