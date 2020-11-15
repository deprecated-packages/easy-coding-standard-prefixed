<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera189153e1f79\PhpParser\Node\Arg;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\Variable;
use _PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall(new \_PhpScopera189153e1f79\PhpParser\Node\Expr\Variable(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScopera189153e1f79\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScopera189153e1f79\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
