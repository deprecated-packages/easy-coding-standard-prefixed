<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall;
use _PhpScopera749ac204cd2\PhpParser\Node\Expr\Variable;
use _PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScopera749ac204cd2\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScopera749ac204cd2\PhpParser\Node\Expr\Variable(\_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
