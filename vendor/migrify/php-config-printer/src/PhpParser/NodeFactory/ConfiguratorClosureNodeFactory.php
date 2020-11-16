<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperad4605bb9267\PhpParser\Node;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\Closure;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable;
use _PhpScoperad4605bb9267\PhpParser\Node\Identifier;
use _PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified;
use _PhpScoperad4605bb9267\PhpParser\Node\Param;
use _PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperad4605bb9267\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperad4605bb9267\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified(\_PhpScoperad4605bb9267\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperad4605bb9267\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Variable(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified(\_PhpScoperad4605bb9267\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperad4605bb9267\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperad4605bb9267\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
