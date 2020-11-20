<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperc753ccca5a0c\Nette\Utils\Strings;
use _PhpScoperc753ccca5a0c\PhpParser\Node;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Name;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc753ccca5a0c\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperc753ccca5a0c\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperc753ccca5a0c\PhpParser\Node $node) : ?\_PhpScoperc753ccca5a0c\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperc753ccca5a0c\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperc753ccca5a0c\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
