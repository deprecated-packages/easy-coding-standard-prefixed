<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperfb0714773dc5\Nette\Utils\Strings;
use _PhpScoperfb0714773dc5\PhpParser\Node;
use _PhpScoperfb0714773dc5\PhpParser\Node\Name;
use _PhpScoperfb0714773dc5\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfb0714773dc5\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperfb0714773dc5\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperfb0714773dc5\PhpParser\Node $node) : ?\_PhpScoperfb0714773dc5\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperfb0714773dc5\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperfb0714773dc5\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperfb0714773dc5\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperfb0714773dc5\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperfb0714773dc5\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
