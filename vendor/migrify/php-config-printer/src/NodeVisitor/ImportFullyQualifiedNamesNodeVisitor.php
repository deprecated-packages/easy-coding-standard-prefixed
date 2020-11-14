<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperecb978830f1e\Nette\Utils\Strings;
use _PhpScoperecb978830f1e\PhpParser\Node;
use _PhpScoperecb978830f1e\PhpParser\Node\Name;
use _PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified;
use _PhpScoperecb978830f1e\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperecb978830f1e\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperecb978830f1e\PhpParser\Node $node) : ?\_PhpScoperecb978830f1e\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperecb978830f1e\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperecb978830f1e\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperecb978830f1e\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
