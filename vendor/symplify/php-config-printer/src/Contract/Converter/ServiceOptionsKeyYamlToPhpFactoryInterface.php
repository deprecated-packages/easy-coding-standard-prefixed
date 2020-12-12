<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperef870243cfdb\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperef870243cfdb\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
