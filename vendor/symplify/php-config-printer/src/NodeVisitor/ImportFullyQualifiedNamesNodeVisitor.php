<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper21c6ce8bfe5d\Nette\Utils\Strings;
use _PhpScoper21c6ce8bfe5d\PhpParser\Node;
use _PhpScoper21c6ce8bfe5d\PhpParser\Node\Name;
use _PhpScoper21c6ce8bfe5d\PhpParser\Node\Name\FullyQualified;
use _PhpScoper21c6ce8bfe5d\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper21c6ce8bfe5d\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoper21c6ce8bfe5d\PhpParser\Node $node) : ?\_PhpScoper21c6ce8bfe5d\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper21c6ce8bfe5d\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper21c6ce8bfe5d\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
