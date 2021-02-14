<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoperf361a7d70552\PhpParser\Node\Arg;
use _PhpScoperf361a7d70552\PhpParser\Node\Expr;
use _PhpScoperf361a7d70552\PhpParser\Node\Expr\FuncCall;
use _PhpScoperf361a7d70552\PhpParser\Node\Name\FullyQualified;
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
    public function resolveServiceReferenceExpr(string $value, bool $skipServiceReference, string $functionName) : \_PhpScoperf361a7d70552\PhpParser\Node\Expr
    {
        $value = \ltrim($value, '@');
        $expr = $this->stringExprResolver->resolve($value, $skipServiceReference, \false);
        if ($skipServiceReference) {
            return $expr;
        }
        $args = [new \_PhpScoperf361a7d70552\PhpParser\Node\Arg($expr)];
        return new \_PhpScoperf361a7d70552\PhpParser\Node\Expr\FuncCall(new \_PhpScoperf361a7d70552\PhpParser\Node\Name\FullyQualified($functionName), $args);
    }
}
