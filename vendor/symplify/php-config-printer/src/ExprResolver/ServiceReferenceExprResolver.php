<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\FuncCall;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Name\FullyQualified;
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
    public function resolveServiceReferenceExpr(string $value, bool $skipServiceReference, string $functionName) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr
    {
        $value = \ltrim($value, '@');
        $expr = $this->stringExprResolver->resolve($value, $skipServiceReference, \false);
        if ($skipServiceReference) {
            return $expr;
        }
        $args = [new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg($expr)];
        return new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\FuncCall(new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
}
