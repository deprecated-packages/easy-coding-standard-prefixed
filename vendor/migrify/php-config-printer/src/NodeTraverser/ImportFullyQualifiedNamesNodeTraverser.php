<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeTraverser;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeVisitor\ImportFullyQualifiedNamesNodeVisitor;
use _PhpScoperbcc0395698f8\Nette\Utils\Strings;
use _PhpScoperbcc0395698f8\PhpParser\BuilderFactory;
use _PhpScoperbcc0395698f8\PhpParser\Node;
use _PhpScoperbcc0395698f8\PhpParser\Node\Name;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Nop;
use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Use_;
use _PhpScoperbcc0395698f8\PhpParser\NodeTraverser;
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
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeVisitor\ImportFullyQualifiedNamesNodeVisitor $importFullyQualifiedNamesNodeVisitor, \_PhpScoperbcc0395698f8\PhpParser\BuilderFactory $builderFactory)
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
        $useImports[] = new \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Nop();
        return \array_merge($useImports, $nodes);
    }
    /**
     * @param Node[] $nodes
     * @return string[]
     */
    private function collectNameImportsFromNodes(array $nodes) : array
    {
        $nodeTraverser = new \_PhpScoperbcc0395698f8\PhpParser\NodeTraverser();
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
            $shortNameImport = \_PhpScoperbcc0395698f8\Nette\Utils\Strings::after($nameImport, '\\', -1);
            if (\function_exists($nameImport) || $shortNameImport === 'ref') {
                $useBuilder = $this->builderFactory->useFunction(new \_PhpScoperbcc0395698f8\PhpParser\Node\Name($nameImport));
                $useImports[] = $useBuilder->getNode();
            } else {
                $useBuilder = $this->builderFactory->use(new \_PhpScoperbcc0395698f8\PhpParser\Node\Name($nameImport));
                $useImports[] = $useBuilder->getNode();
            }
        }
        return $useImports;
    }
}
