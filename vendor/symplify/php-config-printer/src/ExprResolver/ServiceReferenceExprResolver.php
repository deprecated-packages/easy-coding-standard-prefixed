<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoperfb0714773dc5\PhpParser\Node\Arg;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\FuncCall;
use _PhpScoperfb0714773dc5\PhpParser\Node\Name\FullyQualified;
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
    public function resolveServiceReferenceExpr(string $value, bool $skipServiceReference, string $functionName) : \_PhpScoperfb0714773dc5\PhpParser\Node\Expr
    {
        $value = \ltrim($value, '@');
        $expr = $this->stringExprResolver->resolve($value, $skipServiceReference, \false);
        if ($skipServiceReference) {
            return $expr;
        }
        $args = [new \_PhpScoperfb0714773dc5\PhpParser\Node\Arg($expr)];
        return new \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\FuncCall(new \_PhpScoperfb0714773dc5\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
}
