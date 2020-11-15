<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper70072c07b02b\PhpParser\Node\Arg;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoper70072c07b02b\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
