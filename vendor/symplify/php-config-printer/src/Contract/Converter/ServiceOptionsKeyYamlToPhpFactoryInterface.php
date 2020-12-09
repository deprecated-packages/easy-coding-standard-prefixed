<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
