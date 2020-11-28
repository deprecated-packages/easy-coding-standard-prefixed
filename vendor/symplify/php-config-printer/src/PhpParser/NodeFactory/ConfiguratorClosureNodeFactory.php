<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperc8b83ee8976a\PhpParser\Node;
use _PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Closure;
use _PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Variable;
use _PhpScoperc8b83ee8976a\PhpParser\Node\Identifier;
use _PhpScoperc8b83ee8976a\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc8b83ee8976a\PhpParser\Node\Param;
use _PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc8b83ee8976a\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperc8b83ee8976a\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperc8b83ee8976a\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperc8b83ee8976a\PhpParser\Node\Name\FullyQualified(\_PhpScoperc8b83ee8976a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperc8b83ee8976a\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperc8b83ee8976a\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperc8b83ee8976a\PhpParser\Node\Name\FullyQualified(\_PhpScoperc8b83ee8976a\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperc8b83ee8976a\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperc8b83ee8976a\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
