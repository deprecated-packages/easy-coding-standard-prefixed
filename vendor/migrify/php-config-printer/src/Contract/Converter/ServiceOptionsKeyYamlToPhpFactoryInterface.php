<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopercda2b863d098\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
