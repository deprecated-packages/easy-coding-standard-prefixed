<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper78af57a363a0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper78af57a363a0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper78af57a363a0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
