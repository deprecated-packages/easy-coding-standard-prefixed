<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperba5852cc6147\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperba5852cc6147\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperba5852cc6147\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
