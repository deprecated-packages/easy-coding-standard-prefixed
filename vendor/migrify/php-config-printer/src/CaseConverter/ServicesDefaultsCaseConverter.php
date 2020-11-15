<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\Variable;
use _PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScopera189153e1f79\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScopera189153e1f79\PhpParser\Node\Expr\Variable(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
