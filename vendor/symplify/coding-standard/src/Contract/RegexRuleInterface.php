<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall;
interface RegexRuleInterface
{
    /**
     * @return string[]
     */
    public function processRegexFuncCall(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall $funcCall) : array;
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall $staticCall) : array;
}
