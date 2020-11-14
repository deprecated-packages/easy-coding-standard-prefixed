<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperecb978830f1e\PhpParser\Node;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\Closure;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable;
use _PhpScoperecb978830f1e\PhpParser\Node\Identifier;
use _PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified;
use _PhpScoperecb978830f1e\PhpParser\Node\Param;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperecb978830f1e\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperecb978830f1e\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified(\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperecb978830f1e\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Variable(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified(\_PhpScoperecb978830f1e\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperecb978830f1e\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperecb978830f1e\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
