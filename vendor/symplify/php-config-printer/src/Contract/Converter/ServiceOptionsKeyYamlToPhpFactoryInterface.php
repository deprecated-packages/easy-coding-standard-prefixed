<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfaaf57618f34\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
