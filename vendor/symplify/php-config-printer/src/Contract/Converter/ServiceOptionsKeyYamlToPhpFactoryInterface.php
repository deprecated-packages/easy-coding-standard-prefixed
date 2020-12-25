<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper92597f5b42a7\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper92597f5b42a7\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper92597f5b42a7\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
