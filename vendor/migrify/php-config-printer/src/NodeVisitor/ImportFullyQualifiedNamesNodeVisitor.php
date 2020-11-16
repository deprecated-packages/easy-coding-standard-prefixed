<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperad4605bb9267\Nette\Utils\Strings;
use _PhpScoperad4605bb9267\PhpParser\Node;
use _PhpScoperad4605bb9267\PhpParser\Node\Name;
use _PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified;
use _PhpScoperad4605bb9267\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperad4605bb9267\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperad4605bb9267\PhpParser\Node $node) : ?\_PhpScoperad4605bb9267\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperad4605bb9267\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperad4605bb9267\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperad4605bb9267\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
