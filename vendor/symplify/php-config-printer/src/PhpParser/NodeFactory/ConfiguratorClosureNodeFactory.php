<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperfd70a7e8e84f\PhpParser\Node;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Closure;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Variable;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Identifier;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Param;
use _PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Name\FullyQualified(\_PhpScoperfd70a7e8e84f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Name\FullyQualified(\_PhpScoperfd70a7e8e84f\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperfd70a7e8e84f\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
