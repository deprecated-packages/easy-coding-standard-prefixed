<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable;
use _PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall(new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
