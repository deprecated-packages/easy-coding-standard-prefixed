<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Variable(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
