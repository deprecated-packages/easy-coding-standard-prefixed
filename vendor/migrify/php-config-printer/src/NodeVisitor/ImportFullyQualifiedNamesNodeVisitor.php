<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperd4937ee9b515\Nette\Utils\Strings;
use _PhpScoperd4937ee9b515\PhpParser\Node;
use _PhpScoperd4937ee9b515\PhpParser\Node\Name;
use _PhpScoperd4937ee9b515\PhpParser\Node\Name\FullyQualified;
use _PhpScoperd4937ee9b515\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperd4937ee9b515\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperd4937ee9b515\PhpParser\Node $node) : ?\_PhpScoperd4937ee9b515\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperd4937ee9b515\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperd4937ee9b515\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperd4937ee9b515\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperd4937ee9b515\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperd4937ee9b515\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
