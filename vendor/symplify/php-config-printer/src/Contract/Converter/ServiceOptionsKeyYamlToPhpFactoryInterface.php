<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperd4c5032f0671\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd4c5032f0671\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperd4c5032f0671\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
