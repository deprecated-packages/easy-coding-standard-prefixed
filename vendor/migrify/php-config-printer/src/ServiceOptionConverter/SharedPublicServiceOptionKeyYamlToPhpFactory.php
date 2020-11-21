<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
