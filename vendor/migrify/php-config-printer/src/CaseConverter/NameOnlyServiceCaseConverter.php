<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopere5e7dca8c031\PhpParser\Node\Arg;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\Variable;
use _PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall(new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\Variable(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScopere5e7dca8c031\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
