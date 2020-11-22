<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall;
use Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use Symplify\PhpConfigPrinter\Exception\NotImplementedYetException;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \Symplify\PhpConfigPrinter\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
