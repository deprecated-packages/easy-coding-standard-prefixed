<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoper48800f361566\PhpParser\Node\Arg;
use _PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoper48800f361566\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoper48800f361566\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoper48800f361566\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
