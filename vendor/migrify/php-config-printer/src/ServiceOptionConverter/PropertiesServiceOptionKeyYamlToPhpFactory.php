<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
final class PropertiesServiceOptionKeyYamlToPhpFactory implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var SingleServicePhpNodeFactory
     */
    private $singleServicePhpNodeFactory;
    public function __construct(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory $singleServicePhpNodeFactory)
    {
        $this->singleServicePhpNodeFactory = $singleServicePhpNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall
    {
        return $this->singleServicePhpNodeFactory->createProperties($methodCall, $yaml);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::PROPERTIES;
    }
}
