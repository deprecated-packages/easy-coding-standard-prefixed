<?php

declare (strict_types=1);
namespace _PhpScoper470d6df94ac0\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper470d6df94ac0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper470d6df94ac0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper470d6df94ac0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
