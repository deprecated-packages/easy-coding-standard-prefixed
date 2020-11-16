<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
