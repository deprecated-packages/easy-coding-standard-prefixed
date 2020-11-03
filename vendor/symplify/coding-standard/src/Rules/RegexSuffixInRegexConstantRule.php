<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\RegexSuffixInRegexConstantRule\RegexSuffixInRegexConstantRuleTest
 */
final class RegexSuffixInRegexConstantRule extends \Symplify\CodingStandard\Rules\AbstractRegexRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Name your constant with "_REGEX" suffix, instead of "%s"';
    /**
     * @return string[]
     */
    public function processRegexFuncCall(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall $funcCall) : array
    {
        $firstArgValue = $funcCall->args[0]->value;
        return $this->processConstantName($firstArgValue);
    }
    /**
     * @return string[]
     */
    public function processRegexStaticCall(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall $staticCall) : array
    {
        $secondArgValue = $staticCall->args[1]->value;
        return $this->processConstantName($secondArgValue);
    }
    /**
     * @return string[]
     */
    private function processConstantName(\_PhpScoper3d04c8135695\PhpParser\Node\Expr $expr) : array
    {
        if (!$expr instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\ClassConstFetch) {
            return [];
        }
        if ($expr->name instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr) {
            return [];
        }
        $constantName = (string) $expr->name;
        if (\_PhpScoper3d04c8135695\Nette\Utils\Strings::endsWith($constantName, '_REGEX')) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $constantName);
        return [$errorMessage];
    }
}
