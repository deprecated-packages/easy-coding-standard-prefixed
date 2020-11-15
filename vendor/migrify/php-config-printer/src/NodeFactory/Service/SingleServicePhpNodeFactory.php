<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper279cf54b77ad\PhpParser\BuilderHelpers;
use _PhpScoper279cf54b77ad\PhpParser\Node\Arg;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall;
use _PhpScoper279cf54b77ad\PhpParser\Node\Scalar\String_;
use _PhpScoper279cf54b77ad\Symfony\Component\Yaml\Tag\TaggedValue;
final class SingleServicePhpNodeFactory
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createProperties(\_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall $methodCall, array $properties) : \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall
    {
        foreach ($properties as $name => $value) {
            $args = $this->argsNodeFactory->createFromValues([$name, $value]);
            $methodCall = new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall($methodCall, 'property', $args);
        }
        return $methodCall;
    }
    /**
     * @see https://symfony.com/doc/current/service_container/injection_types.html
     */
    public function createCalls(\_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall $methodCall, array $calls) : \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall
    {
        foreach ($calls as $call) {
            // @todo can be more items
            $args = [];
            $methodName = $this->resolveCallMethod($call);
            $args[] = new \_PhpScoper279cf54b77ad\PhpParser\Node\Arg($methodName);
            $argumentsExpr = $this->resolveCallArguments($call);
            $args[] = new \_PhpScoper279cf54b77ad\PhpParser\Node\Arg($argumentsExpr);
            $returnCloneExpr = $this->resolveCallReturnClone($call);
            if ($returnCloneExpr !== null) {
                $args[] = new \_PhpScoper279cf54b77ad\PhpParser\Node\Arg($returnCloneExpr);
            }
            $currentArray = \current($call);
            if ($currentArray instanceof \_PhpScoper279cf54b77ad\Symfony\Component\Yaml\Tag\TaggedValue) {
                $args[] = new \_PhpScoper279cf54b77ad\PhpParser\Node\Arg(\_PhpScoper279cf54b77ad\PhpParser\BuilderHelpers::normalizeValue(\true));
            }
            $methodCall = new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall($methodCall, 'call', $args);
        }
        return $methodCall;
    }
    private function resolveCallMethod($call) : \_PhpScoper279cf54b77ad\PhpParser\Node\Scalar\String_
    {
        return new \_PhpScoper279cf54b77ad\PhpParser\Node\Scalar\String_($call[0] ?? $call['method'] ?? \key($call));
    }
    private function resolveCallArguments($call) : \_PhpScoper279cf54b77ad\PhpParser\Node\Expr
    {
        $arguments = $call[1] ?? $call['arguments'] ?? \current($call);
        return $this->argsNodeFactory->resolveExpr($arguments);
    }
    private function resolveCallReturnClone(array $call) : ?\_PhpScoper279cf54b77ad\PhpParser\Node\Expr
    {
        if (isset($call[2]) || isset($call['returns_clone'])) {
            $returnsCloneValue = $call[2] ?? $call['returns_clone'];
            return \_PhpScoper279cf54b77ad\PhpParser\BuilderHelpers::normalizeValue($returnsCloneValue);
        }
        return null;
    }
}
