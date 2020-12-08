<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper5ea36b274140\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper5ea36b274140\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper5ea36b274140\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
