<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory;
use _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper2fe14d6302bc\PhpParser\Node\Expr\MethodCall;
final class CallsServiceOptionKeyYamlToPhpFactory implements \_PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var SingleServicePhpNodeFactory
     */
    private $singleServicePhpNodeFactory;
    public function __construct(\_PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\NodeFactory\Service\SingleServicePhpNodeFactory $singleServicePhpNodeFactory)
    {
        $this->singleServicePhpNodeFactory = $singleServicePhpNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper2fe14d6302bc\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper2fe14d6302bc\PhpParser\Node\Expr\MethodCall
    {
        return $this->singleServicePhpNodeFactory->createCalls($methodCall, $yaml);
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \_PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::CALLS;
    }
}
