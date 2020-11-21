<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
