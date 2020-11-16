<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoper4d05106cc3c0\Nette\Utils\Strings;
use _PhpScoper4d05106cc3c0\PhpParser\Node;
use _PhpScoper4d05106cc3c0\PhpParser\Node\Name;
use _PhpScoper4d05106cc3c0\PhpParser\Node\Name\FullyQualified;
use _PhpScoper4d05106cc3c0\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoper4d05106cc3c0\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoper4d05106cc3c0\PhpParser\Node $node) : ?\_PhpScoper4d05106cc3c0\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoper4d05106cc3c0\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoper4d05106cc3c0\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoper4d05106cc3c0\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoper4d05106cc3c0\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoper4d05106cc3c0\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
