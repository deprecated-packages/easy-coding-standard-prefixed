<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable;
use _PhpScopera4be459e5e3d\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScopera4be459e5e3d\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\Variable(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
