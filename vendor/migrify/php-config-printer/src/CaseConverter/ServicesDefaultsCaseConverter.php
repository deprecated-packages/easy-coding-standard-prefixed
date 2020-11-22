<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
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
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
