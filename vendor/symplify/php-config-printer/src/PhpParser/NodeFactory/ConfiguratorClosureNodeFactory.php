<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperfcee700af3df\PhpParser\Node;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\Closure;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\Variable;
use _PhpScoperfcee700af3df\PhpParser\Node\Identifier;
use _PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfcee700af3df\PhpParser\Node\Param;
use _PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfcee700af3df\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperfcee700af3df\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified(\_PhpScoperfcee700af3df\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperfcee700af3df\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified(\_PhpScoperfcee700af3df\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperfcee700af3df\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperfcee700af3df\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
