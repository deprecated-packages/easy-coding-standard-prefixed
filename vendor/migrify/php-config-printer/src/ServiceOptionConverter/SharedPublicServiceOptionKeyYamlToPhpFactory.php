<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
