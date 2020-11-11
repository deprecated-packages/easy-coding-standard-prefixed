<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper4f985154d5a0\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoper4f985154d5a0\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoper4f985154d5a0\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoper4f985154d5a0\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
