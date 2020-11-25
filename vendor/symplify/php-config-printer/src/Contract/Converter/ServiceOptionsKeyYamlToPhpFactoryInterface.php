<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper7312d63d356f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper7312d63d356f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper7312d63d356f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
