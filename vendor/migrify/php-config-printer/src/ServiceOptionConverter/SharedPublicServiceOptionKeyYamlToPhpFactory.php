<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
