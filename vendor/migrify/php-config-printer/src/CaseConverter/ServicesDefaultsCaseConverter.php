<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Variable;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\Variable(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
