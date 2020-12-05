<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper87c77ad5700d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper87c77ad5700d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper87c77ad5700d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
