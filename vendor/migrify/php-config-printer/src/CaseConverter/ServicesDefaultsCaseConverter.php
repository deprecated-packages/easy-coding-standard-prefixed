<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
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
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper666af036e800\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoper666af036e800\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoper666af036e800\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoper666af036e800\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoper666af036e800\PhpParser\Node\Expr\Variable(\_PhpScoper666af036e800\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
