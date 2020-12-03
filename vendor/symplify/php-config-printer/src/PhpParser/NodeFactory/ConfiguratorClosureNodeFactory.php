<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoper6c2f17c43d2d\PhpParser\Node;
use _PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Closure;
use _PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Variable;
use _PhpScoper6c2f17c43d2d\PhpParser\Node\Identifier;
use _PhpScoper6c2f17c43d2d\PhpParser\Node\Name\FullyQualified;
use _PhpScoper6c2f17c43d2d\PhpParser\Node\Param;
use _PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper6c2f17c43d2d\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoper6c2f17c43d2d\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Name\FullyQualified(\_PhpScoper6c2f17c43d2d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoper6c2f17c43d2d\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Name\FullyQualified(\_PhpScoper6c2f17c43d2d\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoper6c2f17c43d2d\PhpParser\Node\Param $param, array $stmts) : \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoper6c2f17c43d2d\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
