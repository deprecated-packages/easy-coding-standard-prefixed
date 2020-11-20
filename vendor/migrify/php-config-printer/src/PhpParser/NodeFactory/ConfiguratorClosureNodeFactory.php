<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\PhpParser\NodeFactory;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperc753ccca5a0c\PhpParser\Node;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Identifier;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Param;
use _PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use _PhpScoperc753ccca5a0c\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
final class ConfiguratorClosureNodeFactory
{
    /**
     * @param Node[] $stmts
     */
    public function createContainerClosureFromStmts(array $stmts) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure
    {
        $param = $this->createContainerConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    /**
     * @param Node[] $stmts
     */
    public function createRoutingClosureFromStmts(array $stmts) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure
    {
        $param = $this->createRoutingConfiguratorParam();
        return $this->createClosureFromParamAndStmts($param, $stmts);
    }
    private function createContainerConfiguratorParam() : \_PhpScoperc753ccca5a0c\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified(\_PhpScoperc753ccca5a0c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::class));
    }
    private function createRoutingConfiguratorParam() : \_PhpScoperc753ccca5a0c\PhpParser\Node\Param
    {
        $containerConfiguratorVariable = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName::ROUTING_CONFIGURATOR);
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Param($containerConfiguratorVariable, null, new \_PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified(\_PhpScoperc753ccca5a0c\Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator::class));
    }
    private function createClosureFromParamAndStmts(\_PhpScoperc753ccca5a0c\PhpParser\Node\Param $param, array $stmts) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure
    {
        $closure = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Closure(['params' => [$param], 'stmts' => $stmts, 'static' => \true]);
        // is PHP 7.1? → add "void" return type
        if (\version_compare(\PHP_VERSION, '7.1.0') >= 0) {
            $closure->returnType = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Identifier('void');
        }
        return $closure;
    }
}
