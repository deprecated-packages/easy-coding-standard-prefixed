<?php

declare (strict_types=1);
namespace _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper6207116d4311\PhpParser\Node\Arg;
use _PhpScoper6207116d4311\PhpParser\Node\Expr\MethodCall;
use _PhpScoper6207116d4311\PhpParser\Node\Expr\Variable;
use _PhpScoper6207116d4311\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoper6207116d4311\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper6207116d4311\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper6207116d4311\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoper6207116d4311\PhpParser\Node\Expr\MethodCall(new \_PhpScoper6207116d4311\PhpParser\Node\Expr\Variable(\_PhpScoper6207116d4311\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoper6207116d4311\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoper6207116d4311\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper6207116d4311\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
