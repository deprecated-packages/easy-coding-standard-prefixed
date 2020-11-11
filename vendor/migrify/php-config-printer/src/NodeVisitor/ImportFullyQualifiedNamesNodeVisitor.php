<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper0f5cd390c37a\Nette\Utils\Strings;
use _PhpScoper0f5cd390c37a\PhpParser\Node;
use _PhpScoper0f5cd390c37a\PhpParser\Node\Name;
use _PhpScoper0f5cd390c37a\PhpParser\Node\Name\FullyQualified;
use _PhpScoper0f5cd390c37a\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper0f5cd390c37a\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper0f5cd390c37a\PhpParser\Node $node) : ?\_PhpScoper0f5cd390c37a\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper0f5cd390c37a\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper0f5cd390c37a\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper0f5cd390c37a\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper0f5cd390c37a\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper0f5cd390c37a\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
