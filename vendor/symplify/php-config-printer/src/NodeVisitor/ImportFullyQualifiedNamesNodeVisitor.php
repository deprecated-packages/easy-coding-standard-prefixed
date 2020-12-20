<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperba24099fc6fd\Nette\Utils\Strings;
use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\Node\Name;
use _PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified;
use _PhpScoperba24099fc6fd\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperba24099fc6fd\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperba24099fc6fd\PhpParser\Node $node) : ?\_PhpScoperba24099fc6fd\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperba24099fc6fd\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperba24099fc6fd\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperba24099fc6fd\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
