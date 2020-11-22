<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
final class PropertiesServiceOptionKeyYamlToPhpFactory implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var SingleServicePhpNodeFactory
     */
    private $singleServicePhpNodeFactory;
    public function __construct(\_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory $singleServicePhpNodeFactory)
    {
        $this->singleServicePhpNodeFactory = $singleServicePhpNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall
    {
        return $this->singleServicePhpNodeFactory->createProperties($methodCall, $yaml);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::PROPERTIES;
    }
}
