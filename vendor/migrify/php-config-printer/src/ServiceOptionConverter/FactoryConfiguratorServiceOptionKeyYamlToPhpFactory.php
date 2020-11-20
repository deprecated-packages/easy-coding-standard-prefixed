<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
