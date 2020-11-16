<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera9d6b451df71\PhpParser\BuilderHelpers;
use _PhpScopera9d6b451df71\PhpParser\Node\Arg;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall;
use _PhpScopera9d6b451df71\PhpParser\Node\Scalar\String_;
use _PhpScopera9d6b451df71\Symfony\Component\Yaml\Tag\TaggedValue;
final class SingleServicePhpNodeFactory
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createProperties(\_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScopera9d6b451df71\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScopera9d6b451df71\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScopera9d6b451df71\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScopera9d6b451df71\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScopera9d6b451df71\PhpParser\Node\Arg(\_PhpScopera9d6b451df71\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScopera9d6b451df71\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScopera9d6b451df71\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScopera9d6b451df71\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScopera9d6b451df71\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
