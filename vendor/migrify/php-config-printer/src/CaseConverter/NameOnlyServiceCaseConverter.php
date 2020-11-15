<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperd9c3b46af121\PhpParser\Node\Arg;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\Variable;
use _PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall(new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\Variable(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperd9c3b46af121\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
