<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\FunctionLike;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooLongFunctionLikeRule\TooLongFunctionLikeRuleTest
 */
final class TooLongFunctionLikeRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = '%s has %d lines, it is too long. Shorted it under %d lines';
    /**
     * @var int
     */
    private $maxFunctionLikeLength;
    public function __construct(int $maxFunctionLikeLength)
    {
        $this->maxFunctionLikeLength = $maxFunctionLikeLength;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param Function_|ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $currentFunctionLikeLenght = $this->getNodeLength($node);
        if ($currentFunctionLikeLenght <= $this->maxFunctionLikeLength) {
            return [];
        }
        $functionLikeType = $this->resolveFunctionLikeType($node);
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $functionLikeType, $currentFunctionLikeLenght, $this->maxFunctionLikeLength);
        return [$errorMessage];
    }
    /**
     * @param Function_|ClassMethod $functionLike
     */
    private function resolveFunctionLikeType(\_PhpScoper2b44cb0c30af\PhpParser\Node\FunctionLike $functionLike) : string
    {
        if ($functionLike instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_) {
            return 'Function';
        }
        return 'Method';
    }
    private function getNodeLength(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : int
    {
        return $node->getEndLine() - $node->getStartLine();
    }
}
