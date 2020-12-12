<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperef870243cfdb\PhpParser\Node;
use _PhpScoperef870243cfdb\PhpParser\Node\Expr\Closure;
use _PhpScoperef870243cfdb\PhpParser\Node\Expr\Variable;
use _PhpScoperef870243cfdb\PhpParser\Node\Identifier;
use _PhpScoperef870243cfdb\PhpParser\Node\Name\FullyQualified;
use _PhpScoperef870243cfdb\PhpParser\Node\Param;
use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperef870243cfdb\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperef870243cfdb\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperef870243cfdb\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperef870243cfdb\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperef870243cfdb\PhpParser\Node\Name\FullyQualified(\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperef870243cfdb\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperef870243cfdb\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperef870243cfdb\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperef870243cfdb\PhpParser\Node\Name\FullyQualified(\_PhpScoperef870243cfdb\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperef870243cfdb\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperef870243cfdb\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperef870243cfdb\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
