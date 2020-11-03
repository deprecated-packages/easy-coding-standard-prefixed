<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\Nette\Utils\Strings;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable::class];
    }
    /**
     * @param Variable $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->name instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
            return [];
        }
        $variableName = (string) $node->name;
        $currentVariableLenght = \_PhpScoper2b44cb0c30af\Nette\Utils\Strings::length($variableName);
        if ($currentVariableLenght < $this->maxVariableLength) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $variableName, $currentVariableLenght, $this->maxVariableLength);
        return [$errorMessage];
    }
}
