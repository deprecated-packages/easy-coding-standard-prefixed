<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperf77bffce0320\PhpParser\Node\Arg;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperf77bffce0320\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
