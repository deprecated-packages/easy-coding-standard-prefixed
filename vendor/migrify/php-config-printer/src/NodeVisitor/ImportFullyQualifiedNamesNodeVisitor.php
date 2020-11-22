<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Naming\ClassNaming;
use _PhpScoperfacc742d2745\Nette\Utils\Strings;
use _PhpScoperfacc742d2745\PhpParser\Node;
use _PhpScoperfacc742d2745\PhpParser\Node\Name;
use _PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfacc742d2745\PhpParser\NodeVisitorAbstract;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperfacc742d2745\PhpParser\NodeVisitorAbstract
{
    /**
     * @var ClassNaming
     */
    private $classNaming;
    /**
     * @var string[]
     */
    private $nameImports = [];
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Naming\ClassNaming $classNaming)
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
    public function enterNode(\_PhpScoperfacc742d2745\PhpParser\Node $node) : ?\_PhpScoperfacc742d2745\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperfacc742d2745\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperfacc742d2745\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperfacc742d2745\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
