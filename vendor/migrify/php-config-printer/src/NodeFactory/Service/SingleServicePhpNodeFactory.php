<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperfacc742d2745\PhpParser\BuilderHelpers;
use _PhpScoperfacc742d2745\PhpParser\Node\Arg;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
use _PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_;
use _PhpScoperfacc742d2745\Symfony\Component\Yaml\Tag\TaggedValue;
final class SingleServicePhpNodeFactory
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createProperties(\_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScoperfacc742d2745\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScoperfacc742d2745\PhpParser\Node\Arg(\_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScoperfacc742d2745\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
