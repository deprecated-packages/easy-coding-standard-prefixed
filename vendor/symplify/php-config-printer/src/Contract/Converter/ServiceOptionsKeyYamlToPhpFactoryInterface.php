<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb458b528613f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb458b528613f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb458b528613f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
