<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Arg;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
