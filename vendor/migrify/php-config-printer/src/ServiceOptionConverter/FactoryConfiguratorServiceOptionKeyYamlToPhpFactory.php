<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
