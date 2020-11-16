<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory;
use _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper239b374a39c8\PhpParser\Node\Expr\MethodCall;
final class PropertiesServiceOptionKeyYamlToPhpFactory implements \_PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var SingleServicePhpNodeFactory
     */
    private $singleServicePhpNodeFactory;
    public function __construct(\_PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory $singleServicePhpNodeFactory)
    {
        $this->singleServicePhpNodeFactory = $singleServicePhpNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper239b374a39c8\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper239b374a39c8\PhpParser\Node\Expr\MethodCall
    {
        return $this->singleServicePhpNodeFactory->createProperties($methodCall, $yaml);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::PROPERTIES;
    }
}
