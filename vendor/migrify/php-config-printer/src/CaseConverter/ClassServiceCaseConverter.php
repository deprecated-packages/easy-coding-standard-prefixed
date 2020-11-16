<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\Variable;
use _PhpScoperdf6a0b341030\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperdf6a0b341030\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall(new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\Variable(\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
