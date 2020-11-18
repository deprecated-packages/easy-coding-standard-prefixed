<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\Variable;
use _PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\Variable(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
