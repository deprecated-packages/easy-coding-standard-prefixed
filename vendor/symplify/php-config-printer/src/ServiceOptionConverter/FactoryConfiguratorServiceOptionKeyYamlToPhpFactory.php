<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper4e2df00556a9\PhpParser\Node\Expr\MethodCall;
use Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\YamlKey;
final class FactoryConfiguratorServiceOptionKeyYamlToPhpFactory implements \Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4e2df00556a9\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper4e2df00556a9\PhpParser\Node\Expr\MethodCall
    {
        $args = $this->argsNodeFactory->createFromValuesAndWrapInArray($yaml);
        return new \_PhpScoper4e2df00556a9\PhpParser\Node\Expr\MethodCall($methodCall, 'factory', $args);
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\Symplify\PhpConfigPrinter\ValueObject\YamlKey::FACTORY, \Symplify\PhpConfigPrinter\ValueObject\YamlKey::CONFIGURATOR], \true);
    }
}
