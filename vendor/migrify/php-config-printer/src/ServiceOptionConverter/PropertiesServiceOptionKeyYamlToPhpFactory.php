<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
final class PropertiesServiceOptionKeyYamlToPhpFactory implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var SingleServicePhpNodeFactory
     */
    private $singleServicePhpNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory $singleServicePhpNodeFactory)
    {
        $this->singleServicePhpNodeFactory = $singleServicePhpNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall
    {
        return $this->singleServicePhpNodeFactory->createProperties($methodCall, $yaml);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::PROPERTIES;
    }
}
