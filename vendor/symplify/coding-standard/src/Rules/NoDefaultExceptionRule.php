<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use Exception;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Throw_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use ReflectionClass;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoDefaultExceptionRule\NoDefaultExceptionRuleTest
 */
final class NoDefaultExceptionRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use custom exceptions instead of native "%s"';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Throw_::class];
    }
    /**
     * @param Throw_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->expr instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\New_) {
            return [];
        }
        /** @var New_ $new */
        $new = $node->expr;
        if (!$new->class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name) {
            return [];
        }
        $exceptionClass = (string) $new->class;
        if (!\is_a($exceptionClass, \Exception::class, \true)) {
            return [];
        }
        $reflectionClass = new \ReflectionClass($exceptionClass);
        if (!$reflectionClass->isInternal()) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $exceptionClass)];
    }
}
