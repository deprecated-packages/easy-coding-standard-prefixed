<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ExprResolver;

use _PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\Array_;
use _PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\ArrayItem;
use _PhpScoper8163b0b2b8f3\Symfony\Component\Yaml\Tag\TaggedValue;
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
    public function resolve(\_PhpScoper8163b0b2b8f3\Symfony\Component\Yaml\Tag\TaggedValue $taggedValue) : \_PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\Array_
    {
        $serviceName = $taggedValue->getValue()[0];
        $functionName = $this->symfonyFunctionNameProvider->provideRefOrService();
        $funcCall = $this->serviceReferenceExprResolver->resolveServiceReferenceExpr($serviceName, \false, $functionName);
        return new \_PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\Array_([new \_PhpScoper8163b0b2b8f3\PhpParser\Node\Expr\ArrayItem($funcCall)]);
    }
}
