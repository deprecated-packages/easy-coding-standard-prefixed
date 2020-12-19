<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperd1a5bf00e83e\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd1a5bf00e83e\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperd1a5bf00e83e\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
