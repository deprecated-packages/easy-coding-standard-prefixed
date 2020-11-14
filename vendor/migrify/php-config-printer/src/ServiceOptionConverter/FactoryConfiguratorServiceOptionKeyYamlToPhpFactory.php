<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
