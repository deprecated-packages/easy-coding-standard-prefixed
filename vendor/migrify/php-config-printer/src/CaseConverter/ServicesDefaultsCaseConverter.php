<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
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
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
