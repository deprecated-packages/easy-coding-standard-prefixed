<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera4be459e5e3d\PhpParser\Node;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\Closure;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable;
use _PhpScopera4be459e5e3d\PhpParser\Node\Identifier;
use _PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified;
use _PhpScopera4be459e5e3d\PhpParser\Node\Param;
use _PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScopera4be459e5e3d\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScopera4be459e5e3d\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified(\_PhpScopera4be459e5e3d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScopera4be459e5e3d\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified(\_PhpScopera4be459e5e3d\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScopera4be459e5e3d\PhpParser\Node\Param $param, array $stmts) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScopera4be459e5e3d\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
