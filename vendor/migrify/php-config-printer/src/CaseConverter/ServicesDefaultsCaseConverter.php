<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable;
use _PhpScoperecb978830f1e\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperecb978830f1e\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
