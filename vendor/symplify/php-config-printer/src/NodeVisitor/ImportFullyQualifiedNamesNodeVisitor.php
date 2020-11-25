<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperdc8fbcd7c69d\Nette\Utils\Strings;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Name;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Name\FullyQualified;
use _PhpScoperdc8fbcd7c69d\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperdc8fbcd7c69d\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\Symplify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperdc8fbcd7c69d\PhpParser\Node $node) : ?\_PhpScoperdc8fbcd7c69d\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperdc8fbcd7c69d\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperdc8fbcd7c69d\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
