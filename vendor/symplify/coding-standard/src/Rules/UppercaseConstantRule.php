<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassConst;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\UppercaseConstantRule\UppercaseConstantRuleTest
 */
final class UppercaseConstantRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Constant "%s" must be uppercase';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassConst::class];
    }
    /**
     * @param ClassConst $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        foreach ($node->consts as $const) {
            $constantName = (string) $const->name;
            if (\strtoupper($constantName) === $constantName) {
                continue;
            }
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $constantName);
            return [$errorMessage];
        }
        return [];
    }
}
