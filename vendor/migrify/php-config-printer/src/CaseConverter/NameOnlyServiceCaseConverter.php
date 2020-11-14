<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Arg;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall(new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
