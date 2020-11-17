<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoper967c4b7e296e\Migrify\MigrifyKernel\Exception\NotImplementedYetException;
use _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \_PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \_PhpScoper967c4b7e296e\Migrify\MigrifyKernel\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
