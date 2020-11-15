<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScoperd9c3b46af121\PhpParser\Node\Arg;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperd9c3b46af121\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
