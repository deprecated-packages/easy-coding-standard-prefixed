<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperd9c3b46af121\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperd9c3b46af121\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
