<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperfacc742d2745\PhpParser\Node;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\Closure;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable;
use _PhpScoperfacc742d2745\PhpParser\Node\Identifier;
use _PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfacc742d2745\PhpParser\Node\Param;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperfacc742d2745\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperfacc742d2745\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperfacc742d2745\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Variable(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified(\_PhpScoperfacc742d2745\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperfacc742d2745\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperfacc742d2745\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
