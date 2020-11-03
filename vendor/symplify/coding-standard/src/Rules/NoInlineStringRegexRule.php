<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Scalar\String_;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoInlineStringRegexRule\NoInlineStringRegexRuleTest
 */
final class NoInlineStringRegexRule extends \Symplify\CodingStandard\Rules\AbstractRegexRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use local named constant instead of inline string for regex to explain meaning by constant name';
    /**
     * @return string[]
     */
    public function processRegexFuncCall(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall $funcCall) : array
    {
        $firstArgValue = $funcCall->args[0]->value;
        // it's not string → good
        if (!$firstArgValue instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Scalar\String_) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall $staticCall) : array
    {
        $secondArgValue = $staticCall->args[1]->value;
        // it's not string → good
        if (!$secondArgValue instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Scalar\String_) {
            return [];
        }
        $regexValue = $secondArgValue->value;
        if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::length($regexValue) <= 7) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
