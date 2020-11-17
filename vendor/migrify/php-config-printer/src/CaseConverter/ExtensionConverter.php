<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\Variable;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\Variable(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
