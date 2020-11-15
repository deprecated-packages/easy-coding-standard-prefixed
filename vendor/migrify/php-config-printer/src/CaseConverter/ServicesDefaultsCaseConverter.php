<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
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
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\Variable(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
