<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper5a9febfbbe05\PhpParser\Node;
use _PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Closure;
use _PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Variable;
use _PhpScoper5a9febfbbe05\PhpParser\Node\Identifier;
use _PhpScoper5a9febfbbe05\PhpParser\Node\Name\FullyQualified;
use _PhpScoper5a9febfbbe05\PhpParser\Node\Param;
use _PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoper5a9febfbbe05\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoper5a9febfbbe05\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Variable(\_PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoper5a9febfbbe05\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoper5a9febfbbe05\PhpParser\Node\Name\FullyQualified(\_PhpScoper5a9febfbbe05\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoper5a9febfbbe05\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Variable(\_PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoper5a9febfbbe05\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoper5a9febfbbe05\PhpParser\Node\Name\FullyQualified(\_PhpScoper5a9febfbbe05\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoper5a9febfbbe05\PhpParser\Node\Param $param, array $stmts) : \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoper5a9febfbbe05\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
