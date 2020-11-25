<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\CaseConverter;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\MethodCall;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\Variable;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression;
use Symplify\PhpConfigPrinter\Contract\CaseConverterInterface;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\MethodName;
use Symplify\PhpConfigPrinter\ValueObject\VariableName;
use Symplify\PhpConfigPrinter\ValueObject\YamlKey;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \Symplify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var string
     */
    private $rootKey;
    /**
     * @var YamlKey
     */
    private $yamlKey;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \Symplify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\Variable(\Symplify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \Symplify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
