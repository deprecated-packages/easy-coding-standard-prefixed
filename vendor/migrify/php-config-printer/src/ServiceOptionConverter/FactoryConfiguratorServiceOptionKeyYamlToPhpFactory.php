<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \_PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\_PhpScoper63567e560066\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \_PhpScoper63567e560066\Migrify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
