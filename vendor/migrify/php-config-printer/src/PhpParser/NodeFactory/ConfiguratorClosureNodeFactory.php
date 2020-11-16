<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable;
use _PhpScoperedc2e0c967db\PhpParser\Node\Identifier;
use _PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified;
use _PhpScoperedc2e0c967db\PhpParser\Node\Param;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperedc2e0c967db\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperedc2e0c967db\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperedc2e0c967db\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified(\_PhpScoperedc2e0c967db\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperedc2e0c967db\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperedc2e0c967db\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
