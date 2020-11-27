<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper08748c77fa1c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper08748c77fa1c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper08748c77fa1c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
