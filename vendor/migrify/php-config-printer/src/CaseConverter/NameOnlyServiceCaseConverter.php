<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper5ade29b97028\PhpParser\Node\Arg;
use _PhpScoper5ade29b97028\PhpParser\Node\Expr\MethodCall;
use _PhpScoper5ade29b97028\PhpParser\Node\Expr\Variable;
use _PhpScoper5ade29b97028\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \_PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper5ade29b97028\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoper5ade29b97028\PhpParser\Node\Expr\MethodCall(new \_PhpScoper5ade29b97028\PhpParser\Node\Expr\Variable(\_PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoper5ade29b97028\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoper5ade29b97028\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \_PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}
