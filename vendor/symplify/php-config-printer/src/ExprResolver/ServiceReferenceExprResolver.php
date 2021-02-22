<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoperfcee700af3df\PhpParser\Node\Arg;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\FuncCall;
use _PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified;
final class ServiceReferenceExprResolver
{
    /**
     * @var StringExprResolver
     */
    private $stringExprResolver;
    public function __construct(\Symplify\PhpConfigPrinter\ExprResolver\StringExprResolver $stringExprResolver)
    {
        $this->stringExprResolver = $stringExprResolver;
    }
    public function resolveServiceReferenceExpr(string $value, bool $skipServiceReference, string $functionName) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr
    {
        $value = \ltrim($value, '@');
        $expr = $this->stringExprResolver->resolve($value, $skipServiceReference, \false);
        if ($skipServiceReference) {
            return $expr;
        }
        $args = [new \_PhpScoperfcee700af3df\PhpParser\Node\Arg($expr)];
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\FuncCall(new \_PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
}
