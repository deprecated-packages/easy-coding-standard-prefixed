<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
