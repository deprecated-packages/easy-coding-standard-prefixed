<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
