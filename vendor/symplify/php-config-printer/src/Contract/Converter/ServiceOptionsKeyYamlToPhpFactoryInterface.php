<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper06c5fb6c14ed\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper06c5fb6c14ed\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper06c5fb6c14ed\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
