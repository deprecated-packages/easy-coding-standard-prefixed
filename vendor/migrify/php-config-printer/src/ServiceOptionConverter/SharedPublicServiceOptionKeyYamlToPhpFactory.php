<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper224ae0b86670\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoper224ae0b86670\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
