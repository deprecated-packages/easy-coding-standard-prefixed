<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall;
use _PhpScoper48800f361566\PhpParser\Node\Expr\Variable;
use _PhpScoper48800f361566\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper48800f361566\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoper48800f361566\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoper48800f361566\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoper48800f361566\PhpParser\Node\Expr\Variable(\_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
