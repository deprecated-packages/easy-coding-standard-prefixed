<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScopercb576ca159b5\Nette\Utils\Strings;
use _PhpScopercb576ca159b5\PhpParser\Node;
use _PhpScopercb576ca159b5\PhpParser\Node\Name;
use _PhpScopercb576ca159b5\PhpParser\Node\Name\FullyQualified;
use _PhpScopercb576ca159b5\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScopercb576ca159b5\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScopercb576ca159b5\PhpParser\Node $node) : ?\_PhpScopercb576ca159b5\PhpParser\Node
    {
        if (!$node instanceof \_PhpScopercb576ca159b5\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScopercb576ca159b5\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScopercb576ca159b5\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScopercb576ca159b5\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
