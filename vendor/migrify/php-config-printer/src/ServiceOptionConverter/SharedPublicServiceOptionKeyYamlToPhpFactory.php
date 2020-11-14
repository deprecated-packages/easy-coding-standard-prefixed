<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperecb978830f1e\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
