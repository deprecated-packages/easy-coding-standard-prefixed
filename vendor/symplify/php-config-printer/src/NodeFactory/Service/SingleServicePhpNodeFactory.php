<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperba24099fc6fd\PhpParser\BuilderHelpers;
use _PhpScoperba24099fc6fd\PhpParser\Node\Arg;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall;
use _PhpScoperba24099fc6fd\PhpParser\Node\Scalar\String_;
use _PhpScoperba24099fc6fd\Symfony\Component\Yaml\Tag\TaggedValue;
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
    public function createProperties(\_PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScoperba24099fc6fd\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScoperba24099fc6fd\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScoperba24099fc6fd\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScoperba24099fc6fd\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScoperba24099fc6fd\PhpParser\Node\Arg(\_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScoperba24099fc6fd\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScoperba24099fc6fd\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
