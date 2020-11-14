<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Variable(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
