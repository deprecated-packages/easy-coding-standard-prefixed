<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera40fc53e636b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera40fc53e636b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera40fc53e636b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
