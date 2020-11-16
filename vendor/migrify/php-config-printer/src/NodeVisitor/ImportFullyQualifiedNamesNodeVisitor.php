<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScopera9d6b451df71\Nette\Utils\Strings;
use _PhpScopera9d6b451df71\PhpParser\Node;
use _PhpScopera9d6b451df71\PhpParser\Node\Name;
use _PhpScopera9d6b451df71\PhpParser\Node\Name\FullyQualified;
use _PhpScopera9d6b451df71\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScopera9d6b451df71\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScopera9d6b451df71\PhpParser\Node $node) : ?\_PhpScopera9d6b451df71\PhpParser\Node
    {
        if (!$node instanceof \_PhpScopera9d6b451df71\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScopera9d6b451df71\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScopera9d6b451df71\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScopera9d6b451df71\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScopera9d6b451df71\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
