<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera9d6b451df71\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScopera9d6b451df71\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
