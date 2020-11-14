<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperecb978830f1e\PhpParser\Node\Arg;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable;
use _PhpScoperecb978830f1e\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperecb978830f1e\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall(new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperecb978830f1e\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
