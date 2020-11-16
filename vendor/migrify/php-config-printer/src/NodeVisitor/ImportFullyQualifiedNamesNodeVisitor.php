<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperbcc0395698f8\Nette\Utils\Strings;
use _PhpScoperbcc0395698f8\PhpParser\Node;
use _PhpScoperbcc0395698f8\PhpParser\Node\Name;
use _PhpScoperbcc0395698f8\PhpParser\Node\Name\FullyQualified;
use _PhpScoperbcc0395698f8\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperbcc0395698f8\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperbcc0395698f8\PhpParser\Node $node) : ?\_PhpScoperbcc0395698f8\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperbcc0395698f8\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperbcc0395698f8\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperbcc0395698f8\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperbcc0395698f8\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
