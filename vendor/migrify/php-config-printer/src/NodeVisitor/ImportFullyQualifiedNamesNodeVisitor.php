<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperedc2e0c967db\Nette\Utils\Strings;
use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\Node\Name;
use _PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified;
use _PhpScoperedc2e0c967db\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperedc2e0c967db\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperedc2e0c967db\PhpParser\Node $node) : ?\_PhpScoperedc2e0c967db\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperedc2e0c967db\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperedc2e0c967db\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
