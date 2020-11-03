<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\Naming;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property;
final class SimpleNameResolver
{
    /**
     * @param Node|string $node
     */
    public function getName($node) : ?string
    {
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Property) {
            $propertyProperty = $node->props[0];
            return $this->getName($propertyProperty->name);
        }
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable) {
            return $this->getName($node->name);
        }
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return null;
        }
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Identifier) {
            return (string) $node;
        }
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name) {
            return (string) $node;
        }
        if (\is_string($node)) {
            return $node;
        }
        return null;
    }
}
