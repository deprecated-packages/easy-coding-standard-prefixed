<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScopera9d6b451df71\PhpParser\Node\Arg;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScopera9d6b451df71\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
