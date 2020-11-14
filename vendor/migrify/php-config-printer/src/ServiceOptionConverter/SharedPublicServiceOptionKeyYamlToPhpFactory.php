<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper229e8121cf9f\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoper229e8121cf9f\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
