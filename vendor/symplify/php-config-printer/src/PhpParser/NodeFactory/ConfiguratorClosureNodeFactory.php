<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScopera6f918786d5c\PhpParser\Node;
use _PhpScopera6f918786d5c\PhpParser\Node\Expr\Closure;
use _PhpScopera6f918786d5c\PhpParser\Node\Expr\Variable;
use _PhpScopera6f918786d5c\PhpParser\Node\Identifier;
use _PhpScopera6f918786d5c\PhpParser\Node\Name\FullyQualified;
use _PhpScopera6f918786d5c\PhpParser\Node\Param;
use _PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera6f918786d5c\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScopera6f918786d5c\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScopera6f918786d5c\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScopera6f918786d5c\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScopera6f918786d5c\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScopera6f918786d5c\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScopera6f918786d5c\PhpParser\Node\Name\FullyQualified(\_PhpScopera6f918786d5c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScopera6f918786d5c\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScopera6f918786d5c\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScopera6f918786d5c\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScopera6f918786d5c\PhpParser\Node\Name\FullyQualified(\_PhpScopera6f918786d5c\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScopera6f918786d5c\PhpParser\Node\Param $param, array $stmts) : \_PhpScopera6f918786d5c\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScopera6f918786d5c\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScopera6f918786d5c\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
