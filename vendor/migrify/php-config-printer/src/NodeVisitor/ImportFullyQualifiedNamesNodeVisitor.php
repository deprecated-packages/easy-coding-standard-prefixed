<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperd9c3b46af121\Nette\Utils\Strings;
use _PhpScoperd9c3b46af121\PhpParser\Node;
use _PhpScoperd9c3b46af121\PhpParser\Node\Name;
use _PhpScoperd9c3b46af121\PhpParser\Node\Name\FullyQualified;
use _PhpScoperd9c3b46af121\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperd9c3b46af121\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperd9c3b46af121\PhpParser\Node $node) : ?\_PhpScoperd9c3b46af121\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperd9c3b46af121\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperd9c3b46af121\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperd9c3b46af121\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperd9c3b46af121\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperd9c3b46af121\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
