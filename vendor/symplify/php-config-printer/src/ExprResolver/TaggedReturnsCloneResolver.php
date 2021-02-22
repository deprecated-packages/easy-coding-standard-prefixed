<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoperfcee700af3df\PhpParser\Node\Expr\Array_;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\ArrayItem;
use _PhpScoperfcee700af3df\Symfony\Component\Yaml\Tag\TaggedValue;
use Symplify\PhpConfigPrinter\Configuration\SymfonyFunctionNameProvider;
final class TaggedReturnsCloneResolver
{
    /**
     * @var ServiceReferenceExprResolver
     */
    private $serviceReferenceExprResolver;
    /**
     * @var SymfonyFunctionNameProvider
     */
    private $symfonyFunctionNameProvider;
    public function __construct(\Symplify\PhpConfigPrinter\Configuration\SymfonyFunctionNameProvider $symfonyFunctionNameProvider, \Symplify\PhpConfigPrinter\ExprResolver\ServiceReferenceExprResolver $serviceReferenceExprResolver)
    {
        $this->serviceReferenceExprResolver = $serviceReferenceExprResolver;
        $this->symfonyFunctionNameProvider = $symfonyFunctionNameProvider;
    }
    public function resolve(\_PhpScoperfcee700af3df\Symfony\Component\Yaml\Tag\TaggedValue $taggedValue) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Array_
    {
        $serviceName = $taggedValue->getValue()[0];
        $functionName = $this->symfonyFunctionNameProvider->provideRefOrService();
        $funcCall = $this->serviceReferenceExprResolver->resolveServiceReferenceExpr($serviceName, \false, $functionName);
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Array_([new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\ArrayItem($funcCall)]);
    }
}
