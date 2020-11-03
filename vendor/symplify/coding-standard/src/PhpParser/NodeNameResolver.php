<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PhpParser;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Identifier;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Name;
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
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Name || $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Identifier) {
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
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Name || $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Identifier) {
            return (string) $node;
        }
        return null;
    }
    public function areNamesEquals(\_PhpScoper2b44cb0c30af\PhpParser\Node $firstNode, \_PhpScoper2b44cb0c30af\PhpParser\Node $secondNode) : bool
    {
        $firstName = $this->getName($firstNode);
        if ($firstName === null) {
            return \false;
        }
        $secondName = $this->getName($secondNode);
        return $firstName === $secondName;
    }
}
