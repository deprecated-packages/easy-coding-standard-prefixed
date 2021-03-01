<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperc4ea0f0bd23f\PhpParser\BuilderHelpers;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Scalar\String_;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Yaml\Tag\TaggedValue;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
final class SingleServicePhpNodeFactory
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createProperties(\_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScoperc4ea0f0bd23f\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Arg(\_PhpScoperc4ea0f0bd23f\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScoperc4ea0f0bd23f\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
