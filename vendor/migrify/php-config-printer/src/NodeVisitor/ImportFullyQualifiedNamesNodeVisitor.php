<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScopera4be459e5e3d\Nette\Utils\Strings;
use _PhpScopera4be459e5e3d\PhpParser\Node;
use _PhpScopera4be459e5e3d\PhpParser\Node\Name;
use _PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified;
use _PhpScopera4be459e5e3d\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScopera4be459e5e3d\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScopera4be459e5e3d\PhpParser\Node $node) : ?\_PhpScopera4be459e5e3d\PhpParser\Node
    {
        if (!$node instanceof \_PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScopera4be459e5e3d\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScopera4be459e5e3d\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScopera4be459e5e3d\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
