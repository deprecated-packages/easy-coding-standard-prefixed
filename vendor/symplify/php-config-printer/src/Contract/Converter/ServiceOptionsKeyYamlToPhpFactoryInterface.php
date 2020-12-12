<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper8a05d21c15c9\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper8a05d21c15c9\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper8a05d21c15c9\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
