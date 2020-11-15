<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\Variable;
use _PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     Some:
 *         class: Other <---
 */
final class ClassServiceCaseConverter implements \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var ServiceOptionNodeFactory
     */
    private $serviceOptionNodeFactory;
    public function __construct(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\ServiceOptionNodeFactory $serviceOptionNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->serviceOptionNodeFactory = $serviceOptionNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$key, $values[\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]]);
        $setMethodCall = new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall(new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\Variable(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\MethodName::SET, $args);
        unset($values[\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]);
        $setMethodCall = $this->serviceOptionNodeFactory->convertServiceOptionsToNodes($values, $setMethodCall);
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        if (\is_array($values) && \count($values) !== 1) {
            return \false;
        }
        return isset($values[\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CLASS_KEY]) && !isset($values[\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::ALIAS]);
    }
}
