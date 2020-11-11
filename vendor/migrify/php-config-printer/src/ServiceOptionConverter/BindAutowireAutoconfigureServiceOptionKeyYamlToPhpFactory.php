<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper06c66bea2cf6\PhpParser\Node\Arg;
use _PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoper06c66bea2cf6\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
