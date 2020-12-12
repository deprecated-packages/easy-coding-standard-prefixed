<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperdaf95aff095b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
