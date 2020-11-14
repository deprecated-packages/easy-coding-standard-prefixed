<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperddde3ba4aebc\PhpParser\Node;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Closure;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Identifier;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Param;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperddde3ba4aebc\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperddde3ba4aebc\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperddde3ba4aebc\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Variable(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified(\_PhpScoperddde3ba4aebc\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperddde3ba4aebc\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
