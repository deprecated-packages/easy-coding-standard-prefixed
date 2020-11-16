<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
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
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperdf6a0b341030\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\Variable(\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
