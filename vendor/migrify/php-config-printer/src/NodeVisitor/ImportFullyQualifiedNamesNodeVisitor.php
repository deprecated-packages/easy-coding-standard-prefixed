<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperdf6a0b341030\Nette\Utils\Strings;
use _PhpScoperdf6a0b341030\PhpParser\Node;
use _PhpScoperdf6a0b341030\PhpParser\Node\Name;
use _PhpScoperdf6a0b341030\PhpParser\Node\Name\FullyQualified;
use _PhpScoperdf6a0b341030\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperdf6a0b341030\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperdf6a0b341030\PhpParser\Node $node) : ?\_PhpScoperdf6a0b341030\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperdf6a0b341030\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperdf6a0b341030\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperdf6a0b341030\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperdf6a0b341030\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
