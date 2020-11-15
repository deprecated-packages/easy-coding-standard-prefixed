<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
