<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScopera189153e1f79\PhpParser\Node\Arg;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScopera189153e1f79\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
