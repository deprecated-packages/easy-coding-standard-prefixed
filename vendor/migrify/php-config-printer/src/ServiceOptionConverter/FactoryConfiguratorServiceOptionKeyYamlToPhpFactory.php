<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
