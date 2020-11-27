<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper578a67c80b2b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper578a67c80b2b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper578a67c80b2b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
