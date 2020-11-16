<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4605bb9267\PhpParser\Node\Arg;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable;
use _PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall(new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperad4605bb9267\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
