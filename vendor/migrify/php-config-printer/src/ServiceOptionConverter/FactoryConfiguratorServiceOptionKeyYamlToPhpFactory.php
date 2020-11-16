<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
