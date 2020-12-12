<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper11a6395266c4\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper11a6395266c4\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper11a6395266c4\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
