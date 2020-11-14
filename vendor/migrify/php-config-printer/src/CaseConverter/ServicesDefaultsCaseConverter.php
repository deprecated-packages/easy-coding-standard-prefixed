<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
