<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Arg;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
