<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper2fe14d6302bc\Nette\Utils\Strings;
use _PhpScoper2fe14d6302bc\PhpParser\Node;
use _PhpScoper2fe14d6302bc\PhpParser\Node\Name;
use _PhpScoper2fe14d6302bc\PhpParser\Node\Name\FullyQualified;
use _PhpScoper2fe14d6302bc\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper2fe14d6302bc\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper2fe14d6302bc\PhpParser\Node $node) : ?\_PhpScoper2fe14d6302bc\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper2fe14d6302bc\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper2fe14d6302bc\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper2fe14d6302bc\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper2fe14d6302bc\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper2fe14d6302bc\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
