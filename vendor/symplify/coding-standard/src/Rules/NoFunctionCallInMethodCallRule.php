<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoFunctionCallInMethodCallRule\NoFunctionCallInMethodCallRuleTest
 */
final class NoFunctionCallInMethodCallRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Separate function "%s()" in method call to standalone row to improve readability';
    /**
     * @var string[]
     */
    private const ALLOWED_FUNC_CALL_NAMES = ['getcwd', 'sys_get_temp_dir'];
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $messages = [];
        foreach ($node->args as $arg) {
            if (!$arg->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall) {
                continue;
            }
            $funcCallName = $this->resolveFuncCallName($arg);
            if (\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::contains($funcCallName, '\\')) {
                continue;
            }
            if (\in_array($funcCallName, self::ALLOWED_FUNC_CALL_NAMES, \true)) {
                continue;
            }
            $messages[] = \sprintf(self::ERROR_MESSAGE, $funcCallName);
        }
        return $messages;
    }
    private function resolveFuncCallName(\_PhpScoper8de082cbb8c7\PhpParser\Node\Arg $arg) : string
    {
        /** @var FuncCall $funcCall */
        $funcCall = $arg->value;
        if ($funcCall->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return '*dynamic*';
        }
        return (string) $funcCall->name;
    }
}
