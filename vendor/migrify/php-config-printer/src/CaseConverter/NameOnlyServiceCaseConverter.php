<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Arg;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\Variable;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall(new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\Variable(\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoper49c742f5a4ee\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
