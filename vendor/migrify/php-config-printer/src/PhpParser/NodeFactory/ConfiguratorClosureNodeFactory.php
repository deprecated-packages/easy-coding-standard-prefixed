<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera9d6b451df71\PhpParser\Node;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr\Closure;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr\Variable;
use _PhpScopera9d6b451df71\PhpParser\Node\Identifier;
use _PhpScopera9d6b451df71\PhpParser\Node\Name\FullyQualified;
use _PhpScopera9d6b451df71\PhpParser\Node\Param;
use _PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera9d6b451df71\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScopera9d6b451df71\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\Variable(\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScopera9d6b451df71\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScopera9d6b451df71\PhpParser\Node\Name\FullyQualified(\_PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScopera9d6b451df71\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\Variable(\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScopera9d6b451df71\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScopera9d6b451df71\PhpParser\Node\Name\FullyQualified(\_PhpScopera9d6b451df71\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScopera9d6b451df71\PhpParser\Node\Param $param, array $stmts) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScopera9d6b451df71\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
