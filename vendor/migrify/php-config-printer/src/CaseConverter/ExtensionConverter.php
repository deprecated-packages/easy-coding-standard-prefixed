<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\MethodName;
use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\VariableName;
use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall;
use _PhpScoper63567e560066\PhpParser\Node\Expr\Variable;
use _PhpScoper63567e560066\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * framework: <---
 *     key: value
 */
final class ExtensionConverter implements \_PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
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
    public function __construct(\_PhpScoper63567e560066\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\YamlKey $yamlKey)
    {
        $this->argsNodeFactory = $argsNodeFactory;
        $this->yamlKey = $yamlKey;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper63567e560066\PhpParser\Node\Stmt\Expression
    {
        $args = $this->argsNodeFactory->createFromValues([$this->rootKey, [$key => $values]]);
        $containerConfiguratorVariable = new \_PhpScoper63567e560066\PhpParser\Node\Expr\Variable(\_PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\VariableName::CONTAINER_CONFIGURATOR);
        $methodCall = new \_PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall($containerConfiguratorVariable, \_PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\MethodName::EXTENSION, $args);
        return new \_PhpScoper63567e560066\PhpParser\Node\Stmt\Expression($methodCall);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        $this->rootKey = $rootKey;
        return !\in_array($rootKey, $this->yamlKey->provideRootKeys(), \true);
    }
}
