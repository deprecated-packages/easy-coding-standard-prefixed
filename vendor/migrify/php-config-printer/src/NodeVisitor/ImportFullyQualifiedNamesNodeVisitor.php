<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper64a921a5401b\Nette\Utils\Strings;
use _PhpScoper64a921a5401b\PhpParser\Node;
use _PhpScoper64a921a5401b\PhpParser\Node\Name;
use _PhpScoper64a921a5401b\PhpParser\Node\Name\FullyQualified;
use _PhpScoper64a921a5401b\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper64a921a5401b\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper64a921a5401b\PhpParser\Node $node) : ?\_PhpScoper64a921a5401b\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper64a921a5401b\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper64a921a5401b\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper64a921a5401b\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper64a921a5401b\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper64a921a5401b\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
