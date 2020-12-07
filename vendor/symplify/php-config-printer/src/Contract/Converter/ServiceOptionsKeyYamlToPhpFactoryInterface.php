<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb83706991c7f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb83706991c7f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb83706991c7f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
