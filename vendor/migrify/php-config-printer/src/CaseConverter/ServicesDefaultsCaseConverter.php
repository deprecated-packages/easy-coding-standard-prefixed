<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
