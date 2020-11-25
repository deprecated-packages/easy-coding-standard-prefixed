<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper544eb478a6f6\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper544eb478a6f6\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper544eb478a6f6\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
