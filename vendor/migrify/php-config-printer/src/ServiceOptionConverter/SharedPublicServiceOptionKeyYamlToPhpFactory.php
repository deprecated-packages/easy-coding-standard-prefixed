<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperf77bffce0320\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperf77bffce0320\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
