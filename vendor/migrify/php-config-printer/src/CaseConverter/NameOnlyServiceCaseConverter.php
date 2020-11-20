<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Arg;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall(new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\Variable(\_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
