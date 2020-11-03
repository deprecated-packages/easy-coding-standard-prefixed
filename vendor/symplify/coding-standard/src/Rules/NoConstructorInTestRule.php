<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\Nette\Utils\Strings;
use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\MethodName;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoConstructorInTestRule\NoConstructorInTestRuleTest
 */
final class NoConstructorInTestRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use constructor in test, only setUp()';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if ((string) $node->name !== \Symplify\CodingStandard\ValueObject\MethodName::CONSTRUCTOR) {
            return [];
        }
        $className = $this->getClassName($scope);
        if ($className === null) {
            return [];
        }
        if (!\_PhpScoper8de082cbb8c7\Nette\Utils\Strings::endsWith($className, 'Test')) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
