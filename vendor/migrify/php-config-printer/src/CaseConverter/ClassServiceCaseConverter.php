<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper666af036e800\PhpParser\Node\Expr\MethodCall;
use _PhpScoper666af036e800\PhpParser\Node\Expr\Variable;
use _PhpScoper666af036e800\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper666af036e800\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoper666af036e800\PhpParser\Node\Expr\MethodCall(new \_PhpScoper666af036e800\PhpParser\Node\Expr\Variable(\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoper666af036e800\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
