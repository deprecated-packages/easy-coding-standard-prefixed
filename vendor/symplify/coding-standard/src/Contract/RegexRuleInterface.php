<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall;
interface RegexRuleInterface
{
    /**
     * @return string[]
     */
    public function processRegexFuncCall(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall $funcCall) : array;
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall $staticCall) : array;
}
