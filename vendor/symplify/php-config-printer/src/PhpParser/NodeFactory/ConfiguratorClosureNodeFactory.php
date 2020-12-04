<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperc233426b15e0\PhpParser\Node;
use _PhpScoperc233426b15e0\PhpParser\Node\Expr\Closure;
use _PhpScoperc233426b15e0\PhpParser\Node\Expr\Variable;
use _PhpScoperc233426b15e0\PhpParser\Node\Identifier;
use _PhpScoperc233426b15e0\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc233426b15e0\PhpParser\Node\Param;
use _PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc233426b15e0\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperc233426b15e0\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperc233426b15e0\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperc233426b15e0\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperc233426b15e0\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperc233426b15e0\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperc233426b15e0\PhpParser\Node\Name\FullyQualified(\_PhpScoperc233426b15e0\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperc233426b15e0\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperc233426b15e0\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperc233426b15e0\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperc233426b15e0\PhpParser\Node\Name\FullyQualified(\_PhpScoperc233426b15e0\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperc233426b15e0\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperc233426b15e0\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperc233426b15e0\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperc233426b15e0\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
