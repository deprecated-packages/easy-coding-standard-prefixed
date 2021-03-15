<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoper8a7636b3fdaf\PhpParser\BuilderHelpers;
use _PhpScoper8a7636b3fdaf\PhpParser\Node\Arg;
use _PhpScoper8a7636b3fdaf\PhpParser\Node\Expr;
use _PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8a7636b3fdaf\PhpParser\Node\Scalar\String_;
use _PhpScoper8a7636b3fdaf\Symfony\Component\Yaml\Tag\TaggedValue;
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
    public function createProperties(\_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScoper8a7636b3fdaf\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Arg(\_PhpScoper8a7636b3fdaf\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScoper8a7636b3fdaf\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScoper8a7636b3fdaf\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScoper8a7636b3fdaf\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
