<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey;
use _PhpScopercb576ca159b5\PhpParser\Node\Arg;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScopercb576ca159b5\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
