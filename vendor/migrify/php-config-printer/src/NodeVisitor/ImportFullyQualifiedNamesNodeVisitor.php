<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperb09c3ec8e01a\Nette\Utils\Strings;
use _PhpScoperb09c3ec8e01a\PhpParser\Node;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Name;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified;
use _PhpScoperb09c3ec8e01a\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperb09c3ec8e01a\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperb09c3ec8e01a\PhpParser\Node $node) : ?\_PhpScoperb09c3ec8e01a\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
