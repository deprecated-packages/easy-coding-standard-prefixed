<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Scalar\String_;
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
    public function processRegexFuncCall(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall $funcCall) : array
    {
        $firstArgValue = $funcCall->args[0]->value;
        // it's not string → good
        if (!$firstArgValue instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Scalar\String_) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall $staticCall) : array
    {
        $secondArgValue = $staticCall->args[1]->value;
        // it's not string → good
        if (!$secondArgValue instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Scalar\String_) {
            return [];
        }
        $regexValue = $secondArgValue->value;
        if (\_PhpScoper2b44cb0c30af\Nette\Utils\Strings::length($regexValue) <= 7) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
