<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall;
interface RegexRuleInterface
{
    /**
     * @return string[]
     */
    public function processRegexFuncCall(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall $funcCall) : array;
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall $staticCall) : array;
}
