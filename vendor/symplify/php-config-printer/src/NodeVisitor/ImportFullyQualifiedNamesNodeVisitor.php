<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperca8ca183ac38\Nette\Utils\Strings;
use _PhpScoperca8ca183ac38\PhpParser\Node;
use _PhpScoperca8ca183ac38\PhpParser\Node\Name;
use _PhpScoperca8ca183ac38\PhpParser\Node\Name\FullyQualified;
use _PhpScoperca8ca183ac38\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperca8ca183ac38\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperca8ca183ac38\PhpParser\Node $node) : ?\_PhpScoperca8ca183ac38\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperca8ca183ac38\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperca8ca183ac38\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperca8ca183ac38\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperca8ca183ac38\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperca8ca183ac38\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
