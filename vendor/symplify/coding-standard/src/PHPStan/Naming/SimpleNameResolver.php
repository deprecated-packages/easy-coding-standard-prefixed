<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\Naming;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Identifier;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Name;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Property;
final class SimpleNameResolver
{
    /**
     * @param Node|string $node
     */
    public function getName($node) : ?string
    {
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Property) {
            $propertyProperty = $node->props[0];
            return $this->getName($propertyProperty->name);
        }
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable) {
            return $this->getName($node->name);
        }
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
            return null;
        }
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Identifier) {
            return (string) $node;
        }
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Name) {
            return (string) $node;
        }
        if (\is_string($node)) {
            return $node;
        }
        return null;
    }
}
