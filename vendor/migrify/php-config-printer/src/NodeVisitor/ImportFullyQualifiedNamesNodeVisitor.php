<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScopera749ac204cd2\Nette\Utils\Strings;
use _PhpScopera749ac204cd2\PhpParser\Node;
use _PhpScopera749ac204cd2\PhpParser\Node\Name;
use _PhpScopera749ac204cd2\PhpParser\Node\Name\FullyQualified;
use _PhpScopera749ac204cd2\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScopera749ac204cd2\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScopera749ac204cd2\PhpParser\Node $node) : ?\_PhpScopera749ac204cd2\PhpParser\Node
    {
        if (!$node instanceof \_PhpScopera749ac204cd2\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScopera749ac204cd2\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScopera749ac204cd2\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScopera749ac204cd2\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScopera749ac204cd2\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
