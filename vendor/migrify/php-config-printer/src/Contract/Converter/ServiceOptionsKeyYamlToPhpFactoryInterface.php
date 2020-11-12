<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper3d6b50c3ca2f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
