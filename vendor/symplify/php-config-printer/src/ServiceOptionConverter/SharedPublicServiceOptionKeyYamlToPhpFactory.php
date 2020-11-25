<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall;
use Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use Symplify\PhpConfigPrinter\Exception\NotImplementedYetException;
final class SharedPublicServiceOptionKeyYamlToPhpFactory implements \Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall
    {
        if ($key === 'public') {
            if ($yaml === \false) {
                return new \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
            }
            return new \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        throw new \Symplify\PhpConfigPrinter\Exception\NotImplementedYetException();
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, ['shared', 'public'], \true);
    }
}
