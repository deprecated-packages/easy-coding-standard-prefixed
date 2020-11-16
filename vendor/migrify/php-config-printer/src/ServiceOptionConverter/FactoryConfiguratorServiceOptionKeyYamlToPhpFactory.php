<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
