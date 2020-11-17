<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper967c4b7e296e\Nette\Utils\Strings;
use _PhpScoper967c4b7e296e\PhpParser\Node;
use _PhpScoper967c4b7e296e\PhpParser\Node\Name;
use _PhpScoper967c4b7e296e\PhpParser\Node\Name\FullyQualified;
use _PhpScoper967c4b7e296e\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper967c4b7e296e\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
    {
        $this->classNaming = $classNaming;
    }
    /**
     * @param Node[] $nodes
     * @return Node[]|null
     */
    public function beforeTraverse(array $nodes) : ?array
    {
        $this->nameImports = [];
        return null;
    }
    public function enterNode(\_PhpScoper967c4b7e296e\PhpParser\Node $node) : ?\_PhpScoper967c4b7e296e\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper967c4b7e296e\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper967c4b7e296e\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper967c4b7e296e\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper967c4b7e296e\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper967c4b7e296e\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
