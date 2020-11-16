<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperad4605bb9267\PhpParser\Node\Arg;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperad4605bb9267\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
