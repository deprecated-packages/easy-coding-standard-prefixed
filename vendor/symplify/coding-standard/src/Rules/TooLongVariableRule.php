<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\Nette\Utils\Strings;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\Variable;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\TooLongVariableRule\TooLongVariableRuleTest
 */
final class TooLongVariableRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Variable "$%s" is too long with %d chars. Narrow it under %d chars';
    /**
     * @var int
     */
    private $maxVariableLength;
    public function __construct(int $maxVariableLength = 20)
    {
        $this->maxVariableLength = $maxVariableLength;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\Variable::class];
    }
    /**
     * @param Variable $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->name instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr) {
            return [];
        }
        $variableName = (string) $node->name;
        $currentVariableLenght = \_PhpScoper3d04c8135695\Nette\Utils\Strings::length($variableName);
        if ($currentVariableLenght < $this->maxVariableLength) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $variableName, $currentVariableLenght, $this->maxVariableLength);
        return [$errorMessage];
    }
}
