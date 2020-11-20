<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
