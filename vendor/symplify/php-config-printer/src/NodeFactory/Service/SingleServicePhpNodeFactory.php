<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers;
use _PhpScoperb73f9e44f4eb\PhpParser\Node\Arg;
use _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr;
use _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb73f9e44f4eb\PhpParser\Node\Scalar\String_;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Yaml\Tag\TaggedValue;
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
    public function createProperties(\_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScoperb73f9e44f4eb\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Arg(\_PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScoperb73f9e44f4eb\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
