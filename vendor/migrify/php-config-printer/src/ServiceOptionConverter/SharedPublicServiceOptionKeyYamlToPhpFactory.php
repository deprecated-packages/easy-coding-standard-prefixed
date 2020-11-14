<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
