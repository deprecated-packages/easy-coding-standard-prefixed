<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeTraverser;

use _PhpScopera8f555a7493c\Nette\Utils\Strings;
use _PhpScopera8f555a7493c\PhpParser\BuilderFactory;
use _PhpScopera8f555a7493c\PhpParser\Node;
use _PhpScopera8f555a7493c\PhpParser\Node\Name;
use _PhpScopera8f555a7493c\PhpParser\Node\Stmt\Nop;
use _PhpScopera8f555a7493c\PhpParser\Node\Stmt\Use_;
use _PhpScopera8f555a7493c\PhpParser\NodeTraverser;
use Symplify\PhpConfigPrinter\NodeVisitor\ImportFullyQualifiedNamesNodeVisitor;
final class ImportFullyQualifiedNamesNodeTraverser
{
    /**
     * @var ImportFullyQualifiedNamesNodeVisitor
     */
    private $importFullyQualifiedNamesNodeVisitor;
    /**
     * @var BuilderFactory
     */
    private $builderFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeVisitor\ImportFullyQualifiedNamesNodeVisitor $importFullyQualifiedNamesNodeVisitor, \_PhpScopera8f555a7493c\PhpParser\BuilderFactory $builderFactory)
    {
        $this->importFullyQualifiedNamesNodeVisitor = $importFullyQualifiedNamesNodeVisitor;
        $this->builderFactory = $builderFactory;
    }
    /**
     * @param Node[] $nodes
     * @return Node[]
     */
    public function traverseNodes(array $nodes) : array
    {
        $nameImports = $this->collectNameImportsFromNodes($nodes);
        if (\count($nameImports) === 0) {
            return $nodes;
        }
        return $this->addUseImportsToNamespace($nodes, $nameImports);
    }
    /**
     * @param Node[] $nodes
     * @param string[] $nameImports
     * @return Node[]
     */
    private function addUseImportsToNamespace(array $nodes, array $nameImports) : array
    {
        if (\count($nameImports) === 0) {
            return $nodes;
        }
        \sort($nameImports);
        $useImports = $this->createUses($nameImports);
        $useImports[] = new \_PhpScopera8f555a7493c\PhpParser\Node\Stmt\Nop();
        return \array_merge($useImports, $nodes);
    }
    /**
     * @param Node[] $nodes
     * @return string[]
     */
    private function collectNameImportsFromNodes(array $nodes) : array
    {
        $nodeTraverser = new \_PhpScopera8f555a7493c\PhpParser\NodeTraverser();
        $nodeTraverser->addVisitor($this->importFullyQualifiedNamesNodeVisitor);
        $nodeTraverser->traverse($nodes);
        $nameImports = $this->importFullyQualifiedNamesNodeVisitor->getNameImports();
        return \array_unique($nameImports);
    }
    /**
     * @param string[] $nameImports
     * @return Use_[]
     */
    private function createUses(array $nameImports) : array
    {
        $useImports = [];
        foreach ($nameImports as $nameImport) {
            $shortNameImport = \_PhpScopera8f555a7493c\Nette\Utils\Strings::after($nameImport, '\\', -1);
            if (\function_exists($nameImport) || $shortNameImport === 'ref') {
                $useBuilder = $this->builderFactory->useFunction(new \_PhpScopera8f555a7493c\PhpParser\Node\Name($nameImport));
                /** @var Use_ $use */
                $use = $useBuilder->getNode();
                $useImports[] = $use;
            } else {
                $useBuilder = $this->builderFactory->use(new \_PhpScopera8f555a7493c\PhpParser\Node\Name($nameImport));
                /** @var Use_ $use */
                $use = $useBuilder->getNode();
                $useImports[] = $use;
            }
        }
        return $useImports;
    }
}
