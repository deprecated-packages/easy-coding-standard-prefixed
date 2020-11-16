<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall(new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
