<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoper4e2df00556a9\PhpParser\Node\Expr;
use _PhpScoper4e2df00556a9\Symfony\Component\Yaml\Tag\TaggedValue;
use Symplify\PhpConfigPrinter\ValueObject\FunctionName;
final class TaggedServiceResolver
{
    /**
     * @var ServiceReferenceExprResolver
     */
    private $serviceReferenceExprResolver;
    public function __construct(\Symplify\PhpConfigPrinter\ExprResolver\ServiceReferenceExprResolver $serviceReferenceExprResolver)
    {
        $this->serviceReferenceExprResolver = $serviceReferenceExprResolver;
    }
    public function resolve(\_PhpScoper4e2df00556a9\Symfony\Component\Yaml\Tag\TaggedValue $taggedValue) : \_PhpScoper4e2df00556a9\PhpParser\Node\Expr
    {
        $serviceName = $taggedValue->getValue()['class'];
        $functionName = \Symplify\PhpConfigPrinter\ValueObject\FunctionName::INLINE_SERVICE;
        return $this->serviceReferenceExprResolver->resolveServiceReferenceExpr($serviceName, \false, $functionName);
    }
}
