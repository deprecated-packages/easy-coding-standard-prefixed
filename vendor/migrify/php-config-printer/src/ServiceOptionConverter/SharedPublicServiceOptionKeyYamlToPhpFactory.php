<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopercb576ca159b5\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScopercb576ca159b5\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
