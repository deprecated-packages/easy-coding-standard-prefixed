<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\Variable(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
