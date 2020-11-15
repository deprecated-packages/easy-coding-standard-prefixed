<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\Variable;
use _PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     _defaults: <---
 */
final class ServicesDefaultsCaseConverter implements \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var AutoBindNodeFactory
     */
    private $autoBindNodeFactory;
    public function __construct(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory $autoBindNodeFactory)
    {
        $this->autoBindNodeFactory = $autoBindNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression
    {
        $methodCall = new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall($this->createServicesVariable(), \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\MethodName::DEFAULTS);
        $methodCall = $this->autoBindNodeFactory->createAutoBindCalls($values, $methodCall, \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\Service\AutoBindNodeFactory::TYPE_DEFAULTS);
        return new \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $key === \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::_DEFAULTS;
    }
    private function createServicesVariable() : \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\Variable
    {
        return new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\Variable(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES);
    }
}
