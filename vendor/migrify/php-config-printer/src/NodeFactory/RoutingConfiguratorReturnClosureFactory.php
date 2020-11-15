<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\RoutingCaseConverterInterface;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\PhpParser\NodeFactory\ConfiguratorClosureNodeFactory;
use _PhpScopercb576ca159b5\PhpParser\Node;
use _PhpScopercb576ca159b5\PhpParser\Node\Stmt\Return_;
final class RoutingConfiguratorReturnClosureFactory
{
    /**
     * @var ConfiguratorClosureNodeFactory
     */
    private $containerConfiguratorClosureNodeFactory;
    /**
     * @var RoutingCaseConverterInterface[]
     */
    private $routingCaseConverters = [];
    /**
     * @param RoutingCaseConverterInterface[] $routingCaseConverters
     */
    public function __construct(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\PhpParser\NodeFactory\ConfiguratorClosureNodeFactory $containerConfiguratorClosureNodeFactory, array $routingCaseConverters)
    {
        $this->containerConfiguratorClosureNodeFactory = $containerConfiguratorClosureNodeFactory;
        $this->routingCaseConverters = $routingCaseConverters;
    }
    public function createFromArrayData(array $arrayData) : \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Return_
    {
        $stmts = $this->createClosureStmts($arrayData);
        $closure = $this->containerConfiguratorClosureNodeFactory->createRoutingClosureFromStmts($stmts);
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Return_($closure);
    }
    /**
     * @return Node[]
     */
    private function createClosureStmts(array $arrayData) : array
    {
        $arrayData = $this->removeEmptyValues($arrayData);
        return $this->createNodesFromCaseConverters($arrayData);
    }
    private function removeEmptyValues(array $yamlData) : array
    {
        return \array_filter($yamlData);
    }
    /**
     * @param mixed[] $arrayData
     * @return Node[]
     */
    private function createNodesFromCaseConverters(array $arrayData) : array
    {
        $nodes = [];
        foreach ($arrayData as $key => $values) {
            $expression = null;
            foreach ($this->routingCaseConverters as $caseConverter) {
                if (!$caseConverter->match($key, $values)) {
                    continue;
                }
                $expression = $caseConverter->convertToMethodCall($key, $values);
                break;
            }
            if ($expression === null) {
                continue;
            }
            $nodes[] = $expression;
        }
        return $nodes;
    }
}
