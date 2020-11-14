<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb09c3ec8e01a\PhpParser\Node;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Identifier;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Param;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified(\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified(\_PhpScoperb09c3ec8e01a\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperb09c3ec8e01a\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
