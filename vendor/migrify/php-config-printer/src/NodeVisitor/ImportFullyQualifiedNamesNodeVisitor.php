<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper3d6b50c3ca2f\Nette\Utils\Strings;
use _PhpScoper3d6b50c3ca2f\PhpParser\Node;
use _PhpScoper3d6b50c3ca2f\PhpParser\Node\Name;
use _PhpScoper3d6b50c3ca2f\PhpParser\Node\Name\FullyQualified;
use _PhpScoper3d6b50c3ca2f\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper3d6b50c3ca2f\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper3d6b50c3ca2f\PhpParser\Node $node) : ?\_PhpScoper3d6b50c3ca2f\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper3d6b50c3ca2f\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper3d6b50c3ca2f\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
