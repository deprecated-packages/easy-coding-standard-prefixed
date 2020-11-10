<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopere5e7dca8c031\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScopere5e7dca8c031\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
