<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable;
use _PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall(new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
