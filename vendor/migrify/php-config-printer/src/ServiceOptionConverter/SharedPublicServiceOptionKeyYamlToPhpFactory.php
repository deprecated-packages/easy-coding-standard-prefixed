<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
