<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper49c742f5a4ee\Nette\Utils\Strings;
use _PhpScoper49c742f5a4ee\PhpParser\Node;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Name;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Name\FullyQualified;
use _PhpScoper49c742f5a4ee\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper49c742f5a4ee\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper49c742f5a4ee\PhpParser\Node $node) : ?\_PhpScoper49c742f5a4ee\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper49c742f5a4ee\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper49c742f5a4ee\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper49c742f5a4ee\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
