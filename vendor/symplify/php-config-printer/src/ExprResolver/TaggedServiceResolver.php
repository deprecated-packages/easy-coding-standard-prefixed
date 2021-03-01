<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Yaml\Tag\TaggedValue;
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
    public function resolve(\_PhpScoperc4ea0f0bd23f\Symfony\Component\Yaml\Tag\TaggedValue $taggedValue) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr
    {
        $serviceName = $taggedValue->getValue()['class'];
        $functionName = \Symplify\PhpConfigPrinter\ValueObject\FunctionName::INLINE_SERVICE;
        return $this->serviceReferenceExprResolver->resolveServiceReferenceExpr($serviceName, \false, $functionName);
    }
}
