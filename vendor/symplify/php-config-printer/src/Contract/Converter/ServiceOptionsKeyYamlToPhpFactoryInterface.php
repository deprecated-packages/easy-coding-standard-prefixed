<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
