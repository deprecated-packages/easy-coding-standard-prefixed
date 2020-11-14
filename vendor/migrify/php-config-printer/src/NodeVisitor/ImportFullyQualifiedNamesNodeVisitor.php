<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperddde3ba4aebc\Nette\Utils\Strings;
use _PhpScoperddde3ba4aebc\PhpParser\Node;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Name;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified;
use _PhpScoperddde3ba4aebc\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperddde3ba4aebc\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperddde3ba4aebc\PhpParser\Node $node) : ?\_PhpScoperddde3ba4aebc\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperddde3ba4aebc\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperddde3ba4aebc\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
