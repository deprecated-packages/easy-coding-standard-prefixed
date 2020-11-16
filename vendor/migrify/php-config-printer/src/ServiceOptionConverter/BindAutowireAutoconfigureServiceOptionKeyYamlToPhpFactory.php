<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperbcc0395698f8\PhpParser\Node\Arg;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperbcc0395698f8\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
