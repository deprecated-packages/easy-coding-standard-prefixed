<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera4fc793dae73\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera4fc793dae73\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera4fc793dae73\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
