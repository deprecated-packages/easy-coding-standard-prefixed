<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
