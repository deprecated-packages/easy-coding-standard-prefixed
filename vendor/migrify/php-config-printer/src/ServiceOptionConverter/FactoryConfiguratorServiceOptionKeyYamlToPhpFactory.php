<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
