<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperd8b12759ee0d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd8b12759ee0d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperd8b12759ee0d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
