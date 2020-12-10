<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper6250f8d25076\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper6250f8d25076\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper6250f8d25076\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
