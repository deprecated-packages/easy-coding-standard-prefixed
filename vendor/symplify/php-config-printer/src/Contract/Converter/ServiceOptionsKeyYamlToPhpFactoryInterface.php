<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper21c6ce8bfe5d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
