<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperab9510cd5d97\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
