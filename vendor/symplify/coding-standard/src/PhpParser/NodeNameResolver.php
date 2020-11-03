<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PhpParser;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name;
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
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name || $node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Identifier) {
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
        if ($node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name || $node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Identifier) {
            return (string) $node;
        }
        return null;
    }
    public function areNamesEquals(\_PhpScoper8de082cbb8c7\PhpParser\Node $firstNode, \_PhpScoper8de082cbb8c7\PhpParser\Node $secondNode) : bool
    {
        $firstName = $this->getName($firstNode);
        if ($firstName === null) {
            return \false;
        }
        $secondName = $this->getName($secondNode);
        return $firstName === $secondName;
    }
}
