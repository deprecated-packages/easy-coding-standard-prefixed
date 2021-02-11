<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperef5048aa2573\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperef5048aa2573\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperef5048aa2573\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
