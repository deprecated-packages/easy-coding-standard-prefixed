<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper7f5523334c1b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper7f5523334c1b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper7f5523334c1b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
