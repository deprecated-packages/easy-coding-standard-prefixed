<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Arg;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall(new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperc753ccca5a0c\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
