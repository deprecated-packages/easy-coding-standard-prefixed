<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper224ae0b86670\PhpParser\Node\Arg;
use _PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoper224ae0b86670\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
