<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperaac5f7c652e4\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperaac5f7c652e4\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperaac5f7c652e4\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
