<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperd9fcac9e904f\Nette\Utils\Strings;
use _PhpScoperd9fcac9e904f\PhpParser\Node;
use _PhpScoperd9fcac9e904f\PhpParser\Node\Name;
use _PhpScoperd9fcac9e904f\PhpParser\Node\Name\FullyQualified;
use _PhpScoperd9fcac9e904f\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperd9fcac9e904f\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperd9fcac9e904f\PhpParser\Node $node) : ?\_PhpScoperd9fcac9e904f\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperd9fcac9e904f\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperd9fcac9e904f\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperd9fcac9e904f\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperd9fcac9e904f\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperd9fcac9e904f\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
