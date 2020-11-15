<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\NestedCaseConverterInterface;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\PhpParser\NodeFactory\ConfiguratorClosureNodeFactory;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper70072c07b02b\PhpParser\Node;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\Assign;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\Variable;
use _PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression;
use _PhpScoper70072c07b02b\PhpParser\Node\Stmt\Return_;
final class ContainerConfiguratorReturnClosureFactory
{
    /**
     * @var ConfiguratorClosureNodeFactory
     */
    private $configuratorClosureNodeFactory;
    /**
     * @var CaseConverterInterface[]
     */
    private $caseConverters = [];
    /**
     * @var NestedCaseConverterInterface[]
     */
    private $nestedCaseConverters = [];
    /**
     * @param CaseConverterInterface[] $caseConverters
     * @param NestedCaseConverterInterface[] $nestedCaseConverters
     */
    public function __construct(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\PhpParser\NodeFactory\ConfiguratorClosureNodeFactory $configuratorClosureNodeFactory, array $caseConverters, array $nestedCaseConverters)
    {
        $this->configuratorClosureNodeFactory = $configuratorClosureNodeFactory;
        $this->caseConverters = $caseConverters;
        $this->nestedCaseConverters = $nestedCaseConverters;
    }
    public function createFromYamlArray(array $arrayData) : \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Return_
    {
        $stmts = $this->createClosureStmts($arrayData);
        $closure = $this->configuratorClosureNodeFactory->createContainerClosureFromStmts($stmts);
        return new \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Return_($closure);
    }
    /**
     * @return Node[]
     */
    private function createClosureStmts(array $yamlData) : array
    {
        $yamlData = \array_filter($yamlData);
        return $this->createNodesFromCaseConverters($yamlData);
    }
    /**
     * @param mixed[] $yamlData
     * @return Node[]
     */
    private function createNodesFromCaseConverters(array $yamlData) : array
    {
        $nodes = [];
        foreach ($yamlData as $key => $values) {
            $nodes = $this->createInitializeNode($key, $nodes);
            foreach ($values as $nestedKey => $nestedValues) {
                $expression = null;
                $nestedNodes = [];
                if (\is_array($nestedValues)) {
                    foreach ($nestedValues as $subNestedKey => $subNestedValue) {
                        foreach ($this->nestedCaseConverters as $nestedCaseConverter) {
                            if (!$nestedCaseConverter->match($key, $nestedKey)) {
                                continue;
                            }
                            $expression = $nestedCaseConverter->convertToMethodCall($subNestedKey, $subNestedValue);
                            $nestedNodes[] = $expression;
                        }
                    }
                }
                if ($nestedNodes !== []) {
                    $nodes = \array_merge($nodes, $nestedNodes);
                    continue;
                }
                foreach ($this->caseConverters as $caseConverter) {
                    if (!$caseConverter->match($key, $nestedKey, $nestedValues)) {
                        continue;
                    }
                    /** @var string $nestedKey */
                    $expression = $caseConverter->convertToMethodCall($nestedKey, $nestedValues);
                    break;
                }
                if ($expression === null) {
                    continue;
                }
                $nodes[] = $expression;
            }
        }
        return $nodes;
    }
    private function createInitializeAssign(string $variableName, string $methodName) : \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression
    {
        $servicesVariable = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\Variable($variableName);
        $containerConfiguratorVariable = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\Variable(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $assign = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\Assign($servicesVariable, new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, $methodName));
        return new \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression($assign);
    }
    private function createInitializeNode(string $key, array $nodes) : array
    {
        if ($key === \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::SERVICES) {
            $nodes[] = $this->createInitializeAssign(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\VariableName::SERVICES, \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\MethodName::SERVICES);
        }
        if ($key === \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PARAMETERS) {
            $nodes[] = $this->createInitializeAssign(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\VariableName::PARAMETERS, \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\MethodName::PARAMETERS);
        }
        return $nodes;
    }
}
