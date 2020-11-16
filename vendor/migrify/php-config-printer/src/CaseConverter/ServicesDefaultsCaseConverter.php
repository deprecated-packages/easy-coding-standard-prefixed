<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\Variable;
use _PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\Variable(\_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
