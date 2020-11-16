<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperbcc0395698f8\PhpParser\Node\Arg;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall(new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\Variable(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperbcc0395698f8\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
