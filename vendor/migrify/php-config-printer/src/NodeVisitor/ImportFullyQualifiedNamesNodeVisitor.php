<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScopere5e7dca8c031\Nette\Utils\Strings;
use _PhpScopere5e7dca8c031\PhpParser\Node;
use _PhpScopere5e7dca8c031\PhpParser\Node\Name;
use _PhpScopere5e7dca8c031\PhpParser\Node\Name\FullyQualified;
use _PhpScopere5e7dca8c031\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScopere5e7dca8c031\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScopere5e7dca8c031\PhpParser\Node $node) : ?\_PhpScopere5e7dca8c031\PhpParser\Node
    {
        if (!$node instanceof \_PhpScopere5e7dca8c031\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScopere5e7dca8c031\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScopere5e7dca8c031\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScopere5e7dca8c031\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
