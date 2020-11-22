<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
