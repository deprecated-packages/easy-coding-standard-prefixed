<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PhpParser;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Identifier;
use _PhpScoper3d04c8135695\PhpParser\Node\Name;
final class NodeNameResolver
{
    /**
     * @param string|Node $node
     */
    public function isName($node, string $desiredName) : bool
    {
        if (\is_string($node)) {
            return $node === $desiredName;
        }
        if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Name || $node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Identifier) {
            return (string) $node === $desiredName;
        }
        return \false;
    }
    /**
     * @param string|Node $node
     */
    public function getName($node) : ?string
    {
        if (\is_string($node)) {
            return $node;
        }
        if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Name || $node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Identifier) {
            return (string) $node;
        }
        return null;
    }
    public function areNamesEquals(\_PhpScoper3d04c8135695\PhpParser\Node $firstNode, \_PhpScoper3d04c8135695\PhpParser\Node $secondNode) : bool
    {
        $firstName = $this->getName($firstNode);
        if ($firstName === null) {
            return \false;
        }
        $secondName = $this->getName($secondNode);
        return $firstName === $secondName;
    }
}
