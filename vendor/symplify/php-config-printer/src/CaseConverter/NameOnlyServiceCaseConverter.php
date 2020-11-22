<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\CaseConverter;

use _PhpScoperc5bee3a837bb\PhpParser\Node\Arg;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Expr\Variable;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Stmt\Expression;
use Symplify\PhpConfigPrinter\Contract\CaseConverterInterface;
use Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
use Symplify\PhpConfigPrinter\ValueObject\YamlKey;
/**
 * Handles this part:
 *
 * services:
 *     SomeNamespace\SomeClass: null <---
 */
final class NameOnlyServiceCaseConverter implements \Symplify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperc5bee3a837bb\PhpParser\Node\Stmt\Expression
    {
        $classConstFetch = $this->commonNodeFactory->createClassReference($key);
        $setMethodCall = new \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\MethodCall(new \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::SERVICES), 'set', [new \_PhpScoperc5bee3a837bb\PhpParser\Node\Arg($classConstFetch)]);
        return new \_PhpScoperc5bee3a837bb\PhpParser\Node\Stmt\Expression($setMethodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        if ($rootKey !== \Symplify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            return \false;
        }
        return $values === null || $values === [];
    }
}