<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc4b135661b3a\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc4b135661b3a\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc4b135661b3a\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
