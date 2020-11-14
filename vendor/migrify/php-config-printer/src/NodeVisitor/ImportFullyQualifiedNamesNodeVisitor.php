<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper229e8121cf9f\Nette\Utils\Strings;
use _PhpScoper229e8121cf9f\PhpParser\Node;
use _PhpScoper229e8121cf9f\PhpParser\Node\Name;
use _PhpScoper229e8121cf9f\PhpParser\Node\Name\FullyQualified;
use _PhpScoper229e8121cf9f\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper229e8121cf9f\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper229e8121cf9f\PhpParser\Node $node) : ?\_PhpScoper229e8121cf9f\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper229e8121cf9f\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper229e8121cf9f\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper229e8121cf9f\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper229e8121cf9f\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper229e8121cf9f\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
