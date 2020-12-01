<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper4972b76c81a2\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4972b76c81a2\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper4972b76c81a2\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
