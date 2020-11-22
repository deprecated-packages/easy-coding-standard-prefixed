<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperf3db63c305b2\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf3db63c305b2\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperf3db63c305b2\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
