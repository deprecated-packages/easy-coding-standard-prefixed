<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
