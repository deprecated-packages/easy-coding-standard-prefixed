<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\Closure;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\Variable;
use _PhpScoperba24099fc6fd\PhpParser\Node\Identifier;
use _PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified;
use _PhpScoperba24099fc6fd\PhpParser\Node\Param;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperba24099fc6fd\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperba24099fc6fd\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified(\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperba24099fc6fd\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified(\_PhpScoperba24099fc6fd\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperba24099fc6fd\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperba24099fc6fd\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
