<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper279cf54b77ad\Nette\Utils\Strings;
use _PhpScoper279cf54b77ad\PhpParser\Node;
use _PhpScoper279cf54b77ad\PhpParser\Node\Name;
use _PhpScoper279cf54b77ad\PhpParser\Node\Name\FullyQualified;
use _PhpScoper279cf54b77ad\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper279cf54b77ad\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper279cf54b77ad\PhpParser\Node $node) : ?\_PhpScoper279cf54b77ad\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper279cf54b77ad\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper279cf54b77ad\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper279cf54b77ad\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper279cf54b77ad\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper279cf54b77ad\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
