<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Contract;

use _PhpScoper5928e324b45e\PhpParser\Node\Expr\FuncCall;
use _PhpScoper5928e324b45e\PhpParser\Node\Expr\StaticCall;
interface RegexRuleInterface
{
    /**
     * @return string[]
     */
    public function processRegexFuncCall(\_PhpScoper5928e324b45e\PhpParser\Node\Expr\FuncCall $funcCall) : array;
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper5928e324b45e\PhpParser\Node\Expr\StaticCall $staticCall) : array;
}
