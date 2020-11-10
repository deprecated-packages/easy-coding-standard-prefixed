<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
