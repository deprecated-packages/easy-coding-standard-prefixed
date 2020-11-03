<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Name;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenFuncCallRule\ForbiddenFuncCallRuleTest
 */
final class ForbiddenFuncCallRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Function "%s()" cannot be used/left in the code';
    /**
     * @var ArrayStringAndFnMatcher
     */
    private $arrayStringAndFnMatcher;
    /**
     * @var string[]
     */
    private $forbiddenFunctions = [];
    /**
     * @param string[] $forbiddenFunctions
     */
    public function __construct(\Symplify\PackageBuilder\Matcher\ArrayStringAndFnMatcher $arrayStringAndFnMatcher, array $forbiddenFunctions)
    {
        $this->arrayStringAndFnMatcher = $arrayStringAndFnMatcher;
        $this->forbiddenFunctions = $forbiddenFunctions;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall::class];
    }
    /**
     * @param FuncCall $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->name instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Name) {
            return [];
        }
        $funcName = $node->name->toString();
        if (!$this->arrayStringAndFnMatcher->isMatch($funcName, $this->forbiddenFunctions)) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $funcName)];
    }
}
