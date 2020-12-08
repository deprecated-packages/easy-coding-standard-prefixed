<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeVisitor;

use _PhpScoperf3f1be0d8a30\Nette\Utils\Strings;
use _PhpScoperf3f1be0d8a30\PhpParser\Node;
use _PhpScoperf3f1be0d8a30\PhpParser\Node\Name;
use _PhpScoperf3f1be0d8a30\PhpParser\Node\Name\FullyQualified;
use _PhpScoperf3f1be0d8a30\PhpParser\NodeVisitorAbstract;
use Symplify\PhpConfigPrinter\Naming\ClassNaming;
final class ImportFullyQualifiedNamesNodeVisitor extends \_PhpScoperf3f1be0d8a30\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperf3f1be0d8a30\PhpParser\Node $node) : ?\_PhpScoperf3f1be0d8a30\PhpParser\Node
    {
        if (!$node instanceof \_PhpScoperf3f1be0d8a30\PhpParser\Node\Name\FullyQualified) {
            return null;
        }
        $fullyQualifiedName = $node->toString();
        // namespace-less class name
        if (\_PhpScoperf3f1be0d8a30\Nette\Utils\Strings::startsWith($fullyQualifiedName, '\\')) {
            $fullyQualifiedName = \ltrim($fullyQualifiedName, '\\');
        }
        if (!\_PhpScoperf3f1be0d8a30\Nette\Utils\Strings::contains($fullyQualifiedName, '\\')) {
            return new \_PhpScoperf3f1be0d8a30\PhpParser\Node\Name($fullyQualifiedName);
        }
        $shortClassName = $this->classNaming->getShortName($fullyQualifiedName);
        $this->nameImports[] = $fullyQualifiedName;
        return new \_PhpScoperf3f1be0d8a30\PhpParser\Node\Name($shortClassName);
    }
    /**
     * @return string[]
     */
    public function getNameImports() : array
    {
        return $this->nameImports;
    }
}
